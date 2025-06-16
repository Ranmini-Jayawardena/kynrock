<?php

namespace App\Http\Controllers\Adminpanel\Stay;

use App\Http\Controllers\Controller;
use App\Models\RoomTypes;
use App\Models\RoomTypesImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class RoomTypesImagesController extends Controller

{
    function __construct()
    {
        $this->middleware('permission:roomtypeimages-list|roomtypeimages-create|roomtypeimages-edit|roomtypeimages-delete', ['only' => ['index', 'list']]);
        $this->middleware('permission:roomtypeimages-create', ['only' => ['store', 'create']]);
        $this->middleware('permission:roomtypeimages-delete', ['only' => ['block', 'destroy']]);
    }

    public function index()
    {
        $roomtypes = RoomTypes::where('is_delete', false)->get(); // Fetch all roomtypes that are not deleted
        return view('adminpanel.stay.images.index', compact('roomtypes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'roomtypes_id' => 'required|exists:room_types,id',
            'images.*.image_name' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20480',
            'images.*.order' => 'required|integer',
        
        ], [
            // custom messages here if any
        ], [
            'images.*.image_name' => 'Image',
        ]);

        foreach ($request->images as $imageData) {
            $image = new RoomTypesImages();
            $image->roomtypes_id = $request->roomtypes_id;
            $image->order = $imageData['order'];

            if (isset($imageData['image_name'])) {
                $image->image_name = $imageData['image_name']->store('public/roomtypes_images');
            }

            $image->save();
        }

        return redirect()->route('roomtypeimages-list')
            ->with('success', 'Images created successfully.');
    }


    public function list(Request $request)
    {

        if ($request->ajax()) {
            $data = RoomTypesImages::with('roomtypes')
                ->whereHas('roomtypes', function ($query) {
                    $query->where('is_delete', 0)->where('status', 'Y');
                })
                ->get();

            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('room_name', function ($row) {
                    return $row->roomtypes->room_name ?? 'N/A'; // Display the category name, or 'N/A' if not found
                })
                ->addColumn('image_name', function ($row) {
                    $imgPath = asset("storage/app/{$row->image_name}");
                    $img = '<img src="' . $imgPath . '" style="width: 100px; height: auto;">';
                    return $img;
                })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-roomtypeimages-list/' . encrypt($row->id));
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('blockroomtypeimages', 'adminpanel.stay.images.actionBlock')
                ->rawColumns(['room_name', 'image_name', 'edit', 'blockroomtypeimages'])
                ->make(true);
        }

        return view('adminpanel.stay.images.list');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'roomtypes_id' => 'required|exists:room_types,id',
            'images.*.image_name' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:20480',
            'images.*.order' => 'required|integer',
          ], [
            // custom messages here if any
        ], [
            'images.*.image_name' => 'Image',
        ]);

        $image = RoomTypesImages::find($id);
        $image->roomtypes_id = $request->roomtypes_id;
        $image->order = $request->order;

        if ($request->hasFile('images')) {
            $image->image_name = $request->file('images')[0]['image_name']->store('public/roomtypeimages');
        }

        $image->save();

        return redirect()->route('roomtypeimages-list')
            ->with('success', 'Image updated successfully.');
    }

    public function block(Request $request)
    {


        $image = RoomTypesImages::find($request->id);

        Storage::delete($image->image_name); // Delete the image file from storage
        $image->delete(); // Delete the record from the database


        return redirect()->route('roomtypeimages-list')
            ->with('success', 'Images deleted successfully');
    }
}
