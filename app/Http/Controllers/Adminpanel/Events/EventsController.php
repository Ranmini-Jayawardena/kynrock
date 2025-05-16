<?php


namespace App\Http\Controllers\Adminpanel\Events;

use App\Http\Controllers\Controller;
use App\Models\EventDetails;
use App\Models\EventImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class EventsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:event-list|event-create|event-edit|event-delete', ['only' => ['index', 'list']]);
        $this->middleware('permission:event-create', ['only' => ['store', 'create']]);
        $this->middleware('permission:event-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:event-delete', ['only' => ['block', 'destroy']]);
    }

    public function index()
    {
        return view('adminpanel.events.event_details.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
        ]);
    
        $event = new EventDetails();
        $event->event_name = $request->event_name;
        $event->description = $request->description;
        $event->status = $request->status;
        $event->save();
    
        // Handle images
        if ($request->has('images')) {
            foreach ($request->images as $image) {
                if (isset($image['image_name'])) {
                    $imagePath = $image['image_name']->store('public/eventimages');
                    $imageModel = new EventImages();
                    $imageModel->event_id = $event->id;
                    $imageModel->image_name = $imagePath;
                    $imageModel->order = $image['order'];
                    $imageModel->save();
                }
            }
        }
        return redirect()->route('event-list')
            ->with('success', 'Event List created successfully.');
    }
    
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = EventDetails::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-event/' . encrypt($row->id));
                    return '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                })
                ->addColumn('activation', function($row){
                    $status = $row->status == "Y" ? 'fa fa-check' : 'fa fa-remove';
                    return '<a href="'.route('changestatus-event', ['id' => $row->id]).'"><i class="'.$status.'"></i></a>';
                })
                ->addColumn('blockevent', 'adminpanel.events.event_details.actionsBlock')
                ->rawColumns(['edit', 'activation', 'blockevent'])
                ->make(true);
        }

        return view('adminpanel.events.event_details.list');
    }
 
    public function edit($id)
    {
        $eventID = decrypt($id);
        $data = EventDetails::find($eventID);
        $images = EventImages::where('event_id', $eventID)->get();

        return view('adminpanel.events.event_details.edit', ['data' => $data, 'images' => $images]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'event_name' => 'required',
            'description' => 'required',
        ]);
    
        // Find the experience first
        $data = EventDetails::find($request->id);
        if (!$data) {
            return redirect()->route('event-list')->with('error', 'Event not found.');
        }
    
        // Handle image deletions
        if ($request->has('delete_images')) {
            foreach ($request->delete_images as $imageId) {
                $image = EventImages::find($imageId);
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
                    $imagePath = $image['image_name']->store('public/eventimages');
                    EventImages::updateOrCreate(
                        ['id' => $image['id'] ?? null],
                        [
                            'event_id' => $data->id,
                            'image_name' => $imagePath,
                            'order' => $image['order'] ?? 0
                        ]
                    );
                }
            }
        }
    
        // Update experience data
        $data->event_name = $request->event_name;
        $data->description = $request->description;
        $data->status = $request->status;
        $data->save();
    
        \LogActivity::addToLog('Event record ' . $data->event_name . ' updated(' . $data->id . ').');
    
        return redirect()->route('event-list')
            ->with('success', 'Event updated successfully.');
    }
    
    public function activation($id)
    {
        $data = EventDetails::find($id);

        if ($data->status == "Y") {
            $data->status = 'N';
        } else {
            $data->status = 'Y';
        }

        $data->save();

        \LogActivity::addToLog('Event record ' . $data->event_name . ' status changed (' . $data->id . ').');

        return redirect()->route('event-list')
            ->with('success', 'Event status changed successfully.');
    }

    

    public function block(Request $request)
    {
        $data = EventDetails::find($request->id);
    
        if (!$data) {
            return redirect()->route('event-list')->with('error', 'Event not found.');
        }

        // Retrieve and delete all associated images
        $images = EventImages::where('event_id', $data->id)->get();
        foreach ($images as $image) {
            Storage::delete($image->image_name); // Delete the image file from storage
            $image->delete(); // Delete the record from the database
        }

    // Mark the experience as deleted
        $data->is_delete = 1;
        $data->save();

        \LogActivity::addToLog('Event record ' . $data->event_name . ' and its images deleted(' . $data->id . ').');

        return redirect()->route('event-list')
            ->with('success', 'Event and associated images deleted successfully.');
        }

    
}
