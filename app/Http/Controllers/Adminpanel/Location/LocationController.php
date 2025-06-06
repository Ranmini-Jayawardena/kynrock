<?php


namespace App\Http\Controllers\Adminpanel\Location;

use App\Http\Controllers\Controller;
use App\Models\LocationList as Location;
use App\Models\LocationImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class LocationController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:location-list|location-create|location-edit|location-delete', ['only' => ['index', 'list']]);
        $this->middleware('permission:location-create', ['only' => ['store', 'create']]);
        $this->middleware('permission:location-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:location-delete', ['only' => ['block', 'destroy']]);
    }

    public function index()
    {
        return view('adminpanel.location.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'location_name' => 'required',
            'description' => 'required',
            'home_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if (!$request->file('home_image') == "") {

            $img = $request->file('home_image')->getClientOriginalName();

            $imagePath = $request->file('home_image')->store('public/locationimages');
        } else {
            $path = "";
        }

        $location = new Location();
        $location->location_name = $request->location_name;
        $location->description = $request->description;
        $location->home_image = $imagePath;
        $location->order = $request->order;
        $location->status = $request->status;
        $location->save();


    
        // Handle images
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                if (isset($image['image_name'])) {
                    $imagePath = $image['image_name']->store('public/locationimages');
                    $imageModel = new LocationImages();
                    $imageModel->location_id = $location->id;
                    $imageModel->image_name = $imagePath;
                    $imageModel->order = $image['order'];
                    $imageModel->save();
                }
            }
        }
        return redirect()->route('location-list')
            ->with('success', 'location List created successfully.');
    }
    
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = Location::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-location/' . encrypt($row->id));
                    return '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                })
                ->addColumn('activation', function($row){
                    $status = $row->status == "Y" ? 'fa fa-check' : 'fa fa-remove';
                    return '<a href="'.route('changestatus-location', ['id' => $row->id]).'"><i class="'.$status.'"></i></a>';
                })
                ->addColumn('blocklocation', 'adminpanel.location.actionsBlock')
                ->rawColumns(['edit', 'activation', 'blocklocation'])
                ->make(true);
        }

        return view('adminpanel.location.list');
    }
 
    public function edit($id)
    {
        $locationID = decrypt($id);
        $data = Location::find($locationID);
        $images = LocationImages::where('location_id', $locationID)->get();

        return view('adminpanel.location.edit', ['data' => $data, 'images' => $images]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'location_name' => 'required',
            'description' => 'required',
        ]);

        if (!$request->file('home_image') == "") {

            $img = $request->file('home_image')->getClientOriginalName();

            $imagePath = $request->file('home_image')->store('public/locationimages');
        } else {
            $path = "";
        }
        // Find the location first
        $data = Location::find($request->id);
        if (!$data) {
            return redirect()->route('location-list')->with('error', 'location not found.');
        }
    
        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = LocationImages::find($imageId);
                if ($image) {
                    Storage::delete($image->image_name); // Delete the image file from storage
                    $image->delete(); // Delete the record from the database
                }
            }
        }
    
        // Handle image updates/additions
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                if (isset($image['image_name']) && $image['image_name']) { // Check if image_name exists
                    $imagePath = $image['image_name']->store('public/locationimages');
                    LocationImages::updateOrCreate(
                        ['id' => $image['id'] ?? null],
                        [
                            'location_id' => $data->id,
                            'image_name' => $imagePath,
                            'order' => $image['order'] ?? 0
                        ]
                    );
                }elseif (isset($image['id'])) {
                    // If only order is updated
                    LocationImages::where('id', $image['id'])->update([
                        'order' => $image['order'] ?? 0
                    ]);
                }
            }
        }
    
        // Update location data
        $data->location_name = $request->location_name;
        $data->description = $request->description;
        if(isset($imagePath)) {
            $data->home_image = $imagePath;
        }
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
    
        \LogActivity::addToLog('location record ' . $data->location_name . ' updated(' . $data->id . ').');
    
        return redirect()->route('location-list')
            ->with('success', 'location updated successfully.');
    }
    
    public function activation($id)
    {
        $data = Location::find($id);

        if ($data->status == "Y") {
            $data->status = 'N';
        } else {
            $data->status = 'Y';
        }

        $data->save();

        \LogActivity::addToLog('location record ' . $data->location_name . ' status changed (' . $data->id . ').');

        return redirect()->route('location-list')
            ->with('success', 'location status changed successfully.');
    }

    

    public function block(Request $request)
    {
        $data = Location::find($request->id);
    
        if (!$data) {
            return redirect()->route('location-list')->with('error', 'location not found.');
        }

        // Retrieve and delete all associated images
        $images = LocationImages::where('location_id', $data->id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image_name); // Delete the image file from storage
            $image->delete(); // Delete the record from the database
        }

    // Mark the location as deleted
        $data->is_delete = 1;
        $data->save();

        \LogActivity::addToLog('location record ' . $data->location_name . ' and its images deleted(' . $data->id . ').');

        return redirect()->route('location-list')
            ->with('success', 'location and associated images deleted successfully.');
        }

    
}
