<?php

namespace App\Http\Controllers\Adminpanel\Gallery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use App\Models\GallerySubCategory;
use App\Models\GalleryImages;
use Illuminate\Support\Facades\Storage;
use DataTables;

class ImageController extends Controller

{
    function __construct()
    {
        $this->middleware('permission:images-list|images-create|images-edit|images-delete', ['only' => ['index', 'list']]);
        $this->middleware('permission:images-create', ['only' => ['store', 'create']]);
        $this->middleware('permission:images-delete', ['only' => ['block', 'destroy']]);
    }

    public function index()
    {
        $categories = GalleryCategory::where('is_delete', 0)->where('status', 'Y')->get();
        return view('adminpanel.gallery.images.index', compact('categories'));
    }

    public function fetchSubcategories(Request $request)
    {
        $subcategories = GallerySubCategory::where('category_id', $request->category_id)
            ->OrderBy('order', 'asc')
            ->get();
        return response()->json($subcategories);
    }
    public function checkCategorySubcategoryCombination(Request $request)
    {
        $exists = GalleryImages::where('category_id', $request->category_id)
            ->where('subcategory_id', $request->subcategory_id)
            ->exists();

        return response()->json(['exists' => $exists]);
    }


    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'subcategory_id' => 'required|exists:sub_categories,id',
            'images.*.image_name' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);



        foreach ($request->images as $img) {
            $image = new GalleryImages();
            $image->category_id = $request->category_id;
            $image->subcategory_id = $request->subcategory_id;
            $image->order = $img['order'] ?? 0;
            $image->image_name = $img['image_name']->store('public/images');
            $image->save();
        }

        return redirect()->route('images-list')
            ->with('success', 'Images created successfully.');
    }


    public function list(Request $request)
    {

        if ($request->ajax()) {
            $data = GalleryImages::with('category', 'subcategory')
                ->selectRaw('MIN(id) as id, category_id, subcategory_id') // get one image per group
                ->groupBy('category_id', 'subcategory_id')
                ->get();

            // Fetch the images with their associated category

            return Datatables::of($data)
                ->addIndexColumn()


                ->addColumn('category', fn($row) => $row->category->category_name ?? '-')
                ->addColumn('subcategory', fn($row) => $row->subcategory->sub_category_name ?? '-')
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-images/' . encrypt($row->id));
                    return '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                })
                ->addColumn('blockimages', function ($row) {
                    return view('adminpanel.gallery.images.actionsBlock', [
                        'category_id' => $row->category_id,
                        'subcategory_id' => $row->subcategory_id,
                    ])->render();
                })

                ->rawColumns(['category', 'subcategory', 'edit', 'blockimages'])
                ->make(true);
        }

        return view('adminpanel.gallery.images.list');
    }

    public function edit($encryptedId)
    {
        $firstImage = GalleryImages::findOrFail(decrypt($encryptedId));
        // dd($firstImage);
        $images = GalleryImages::where('category_id', $firstImage->category_id)
            ->OrderBy('order', 'asc')
            ->where('subcategory_id', $firstImage->subcategory_id)
            ->get();

        $categories = GalleryCategory::where('is_delete', 0)->where('status', 'Y')->get();
        $subcategories = GallerySubCategory::where('category_id', $firstImage->category_id)
            ->OrderBy('order', 'asc')
            ->get();

        return view('adminpanel.gallery.images.edit', compact('firstImage', 'images', 'categories', 'subcategories', 'encryptedId'));
    }

    public function update(Request $request, $encryptedId)
    {
        $firstImage = GalleryImages::findOrFail(decrypt($encryptedId));

        $request->validate([]);

        // Delete removed images
        $existingIds = GalleryImages::where('category_id', $firstImage->category_id)
            ->where('subcategory_id', $firstImage->subcategory_id)
            ->pluck('id')
            ->toArray();

        $submittedIds = collect($request->images)->pluck('id')->filter()->map(fn($id) => (int) $id)->toArray();
        $toDelete = array_diff($existingIds, $submittedIds);

        foreach ($toDelete as $deleteId) {
            $img = GalleryImages::find($deleteId);
            if ($img) {
                Storage::delete($img->image_name);
                $img->delete();
            }
        }

        foreach ($request->images as $imgData) {
            if (isset($imgData['id'])) {
                // Update existing image
                $image = GalleryImages::find($imgData['id']);
                if ($image) {
                    if (isset($imgData['order'])) {
                        $image->order = $imgData['order'];
                    }

                    if (isset($imgData['image_name']) && $imgData['image_name'] instanceof \Illuminate\Http\UploadedFile) {
                        Storage::delete($image->image_name);
                        $image->image_name = $imgData['image_name']->store('public/images');
                    }

                    $image->save();
                }
            } else {
                // Add new image
                if (!empty($imgData['image_name']) && isset($imgData['order'])) {
                    $new = new GalleryImages();
                    $new->category_id = $request->category_id;
                    $new->subcategory_id = $request->subcategory_id;
                    $new->order = $imgData['order'];
                    $new->image_name = $imgData['image_name']->store('public/images');
                    $new->save();
                }
            }
        }


        return redirect()->route('images-list')->with('success', 'Images updated successfully.');
    }


    public function block(Request $request)
    {
        $categoryId = $request->category_id;
        $subcategoryId = $request->subcategory_id;

        $images = GalleryImages::where('category_id', $categoryId)
            ->where('subcategory_id', $subcategoryId)
            ->get();

        foreach ($images as $image) {
            // Delete image file from storage
            if ($image->media_name && Storage::exists($image->media_name)) {
                Storage::delete($image->media_name);
            }

            // Delete from database
            $image->delete();
        }

        return redirect()->route('images-list')
            ->with('success', 'Images deleted successfully.');
    }
}
