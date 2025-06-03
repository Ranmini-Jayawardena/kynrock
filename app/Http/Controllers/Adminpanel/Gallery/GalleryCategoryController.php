<?php

namespace App\Http\Controllers\Adminpanel\Gallery;

use App\Http\Controllers\Controller;
use App\Models\GalleryCategory as Category;
use App\Models\GallerySubCategory;
use App\Models\GalleryImages as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class GalleryCategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:gallery-list|gallery-create|gallery-edit|gallery-delete', ['only' => ['index', 'list']]);
        $this->middleware('permission:gallery-create', ['only' => ['store', 'create']]);
        $this->middleware('permission:gallery-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:gallery-delete', ['only' => ['block', 'destroy']]);
    }

    public function index()
    {
        return view('adminpanel.gallery.gallery_category.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'subcategories.*.sub_category_name' => 'nullable|string|max:255',
        ]);

        $category = new Category();
        $category->category_name = $request->category_name;
        $category->status = $request->status;


        $category->save();

        // Save subcategories
        if ($request->has('subcategories')) {
            foreach ($request->subcategories as $sub) {
                if (!empty($sub['sub_category_name'])) {
                    $subcategory = new GallerySubCategory();
                    $subcategory->category_id = $category->id;
                    $subcategory->sub_category_name = $sub['sub_category_name'];
                    $subcategory->order = $sub['order'] ?? 0;
                    $subcategory->save();
                }
            }

            return redirect()->route('gallery-list')
                ->with('success', 'Gallery category and subcategories created successfully.');
        }
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Category::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-gallery/' . encrypt($row->id));
                    return '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                })
                ->addColumn('activation', function ($row) {
                    $status = $row->status == "Y" ? 'fa fa-check' : 'fa fa-remove';
                    return '<a href="' . route('changestatus-gallery', ['id' => $row->id]) . '"><i class="' . $status . '"></i></a>';
                })
                ->addColumn('blockgallery', 'adminpanel.gallery.gallery_category.actionsBlock')
                ->rawColumns(['edit', 'activation', 'blockgallery'])
                ->make(true);
        }

        return view('adminpanel.gallery.gallery_category.list');
    }

    public function edit($id)
    {
        $categoryID = decrypt($id);
        $data = Category::find($categoryID);
        $subcategories = GallerySubCategory::where('category_id', $categoryID)
            ->OrderBy('order')
            ->get();

        return view('adminpanel.gallery.gallery_category.edit', ['data' => $data, 'subcategories' => $subcategories]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
            'subcategories.*.sub_category_name' => 'nullable|string|max:255',
        ]);

        $data = Category::find($request->id);
        if (!$data) {
            return redirect()->route('gallery-list')->with('error', 'Category not found.');
        }

        $data->category_name = $request->category_name;
        $data->status = $request->status;
        $data->save();

        $existingSubcategoryIds = GallerySubCategory::where('category_id', $data->id)->pluck('id')->toArray();
        $newSubcategoryIds = [];

        if ($request->has('subcategories')) {
            foreach ($request->subcategories as $sub) {
                if (isset($sub['id'])) {
                    $newSubcategoryIds[] = $sub['id'];
                }
            }

            // Identify subcategories that were removed
            $subcategoriesToDelete = array_diff($existingSubcategoryIds, $newSubcategoryIds);

            // Delete images for removed subcategories
            foreach ($subcategoriesToDelete as $subId) {
                $images = Image::where('subcategory_id', $subId)->get();
                foreach ($images as $image) {
                    if (Storage::exists($image->image_name)) {
                        Storage::delete($image->image_name);
                    }
                    $image->delete();
                }
                GallerySubCategory::where('id', $subId)->delete(); // remove subcategory too
            }


            foreach ($request->subcategories as $sub) {
                if (!empty($sub['sub_category_name'])) {
                    if (isset($sub['id'])) {
                        $subcategory = GallerySubCategory::find($sub['id']);
                        if ($subcategory) {
                            $subcategory->sub_category_name = $sub['sub_category_name'];
                            $subcategory->order = $sub['order'] ?? 0;
                            $subcategory->save();
                        }
                    } else {
                        $subcategory = new GallerySubCategory();
                        $subcategory->category_id = $data->id;
                        $subcategory->sub_category_name = $sub['sub_category_name'];
                        $subcategory->order = $sub['order'] ?? 0;
                        $subcategory->save();
                    }
                }
            }
        } else {
            // If all subcategories are removed
            foreach ($existingSubcategoryIds as $subId) {
                $images = Image::where('subcategory_id', $subId)->get();
                foreach ($images as $image) {
                    if (Storage::exists($image->image_name)) {
                        Storage::delete($image->image_name);
                    }
                    $image->delete();
                }
                GallerySubCategory::where('id', $subId)->delete();
            }
        }


        \LogActivity::addToLog('Gallery record ' . $data->category_name . ' updated(' . $data->id . ').');

        return redirect()->route('gallery-list')
            ->with('success', 'Gallery Category updated successfully.');
    }


    public function activation(Request $request)
    {
        $data =  Category::find($request->id);

        if ($data->status == "Y") {
            $data->status = 'N';
            $message = 'deactivated';
        } else {
            $data->status = "Y";
            $message = 'activated';
        }

        $data->save();
        \LogActivity::addToLog('Gallery record ' . $data->category_name . ' ' . $message . '(' . $data->id . ').');

        return redirect()->route('gallery-list')
            ->with('success', 'Gallery Category ' . $message . ' successfully.');
    }

    public function block(Request $request)
    {
        $data = Category::find($request->id);

        if (!$data) {
            return redirect()->route('gallery-list')->with('error', 'Gallery not found.');
        }

        $images = Image::where('category_id', $data->id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image_name);
            $image->delete();
        }

        $data->is_delete = 1;
        $data->save();

        \LogActivity::addToLog('Gallery record ' . $data->category_name . ' and its images deleted(' . $data->id . ').');

        return redirect()->route('gallery-list')
            ->with('success', 'Gallery Category deleted successfully.');
    }
}
