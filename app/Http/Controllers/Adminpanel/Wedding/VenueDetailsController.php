<?php


namespace App\Http\Controllers\Adminpanel\Wedding;

use App\Http\Controllers\Controller;
use App\Models\VenueDetails;
use App\Models\VenueImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class VenueDetailsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:venue-list|venue-create|venue-edit|venue-delete', ['only' => ['index', 'list']]);
        $this->middleware('permission:venue-create', ['only' => ['store', 'create']]);
        $this->middleware('permission:venue-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:venue-delete', ['only' => ['block', 'destroy']]);
    }

    public function index()
    {
        return view('adminpanel.wedding.venue_details.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'venue_name' => 'required',
            'description' => 'required',
        ]);
    
        $venue = new VenueDetails();
        $venue->venue_name = $request->venue_name;
        $venue->description = $request->description;
        $venue->status = $request->status;
        $venue->save();
    
        // Handle images
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                if (isset($image['image_name'])) {
                    $imagePath = $image['image_name']->store('public/venueimages');
                    $imageModel = new VenueImages();
                    $imageModel->venue_id = $venue->id;
                    $imageModel->image_name = $imagePath;
                    $imageModel->order = $image['order'];
                    $imageModel->save();
                }
            }
        }
        return redirect()->route('venue-list')
            ->with('success', 'Venue created successfully.');
    }
    
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = VenueDetails::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-venue/' . encrypt($row->id));
                    return '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                })
                ->addColumn('activation', function($row){
                    $status = $row->status == "Y" ? 'fa fa-check' : 'fa fa-remove';
                    return '<a href="'.route('changestatus-venue', ['id' => $row->id]).'"><i class="'.$status.'"></i></a>';
                })
                ->addColumn('blockvenue', 'adminpanel.wedding.venue_details.actionsBlock')
                ->rawColumns(['edit', 'activation', 'blockvenue'])
                ->make(true);
        }

        return view('adminpanel.wedding.venue_details.list');
    }
 
    public function edit($id)
    {
        $venueID = decrypt($id);
        $data = VenueDetails::find($venueID);
        $images = VenueImages::where('venue_id', $venueID)->get();

        return view('adminpanel.wedding.venue_details.edit', ['data' => $data, 'images' => $images]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'venue_name' => 'required',
            'description' => 'required',
        ]);
    
        // Find the experience first
        $data = VenueDetails::find($request->id);
        if (!$data) {
            return redirect()->route('venue-list')->with('error', 'Venue not found.');
        }
    
        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = VenueImages::find($imageId);
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
                    $imagePath = $image['image_name']->store('public/venueimages');
                    VenueImages::updateOrCreate(
                        ['id' => $image['id'] ?? null],
                        [
                            'venue_id' => $data->id,
                            'image_name' => $imagePath,
                            'order' => $image['order'] ?? 0
                        ]
                    );
                }
            }
        }
    
        // Update experience data
        $data->venue_name = $request->venue_name;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->save();
    
        \LogActivity::addToLog('Venue record ' . $data->venue_name . ' updated(' . $data->id . ').');
    
        return redirect()->route('venue-list')
            ->with('success', 'Venue updated successfully.');
    }
    
    public function activation($id)
    {
        $data = VenueDetails::find($id);

        if ($data->status == "Y") {
            $data->status = 'N';
        } else {
            $data->status = 'Y';
        }

        $data->save();

        \LogActivity::addToLog('Venue record ' . $data->venue_name . ' status changed (' . $data->id . ').');

        return redirect()->route('venue-list')
            ->with('success', 'Venue status changed successfully.');
    }

    

    public function block(Request $request)
    {
        $data = VenueDetails::find($request->id);
    
        if (!$data) {
            return redirect()->route('venue-list')->with('error', 'Venue not found.');
        }

        // Retrieve and delete all associated images
        $images = VenueImages::where('venue_id', $data->id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image_name); // Delete the image file from storage
            $image->delete(); // Delete the record from the database
        }

    // Mark the experience as deleted
        $data->is_delete = 1;
        $data->save();

        \LogActivity::addToLog('Venue record ' . $data->venue_name . ' and its images deleted(' . $data->id . ').');

        return redirect()->route('venue-list')
            ->with('success', 'Venue and associated images deleted successfully.');
        }

    
}
