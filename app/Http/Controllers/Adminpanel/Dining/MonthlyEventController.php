<?php


namespace App\Http\Controllers\Adminpanel\Dining;

use App\Http\Controllers\Controller;
use App\Models\DiningMonthlyEvent as MonthlyEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class MonthlyEventController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:monthlyevent-list|monthlyevent-create|monthlyevent-edit|monthlyevent-delete', ['only' => ['index', 'list']]);
        $this->middleware('permission:monthlyevent-create', ['only' => ['store', 'create']]);
        $this->middleware('permission:monthlyevent-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:monthlyevent-delete', ['only' => ['block', 'destroy']]);
    }

    public function index()
    {
        return view('adminpanel.dining.monthlyevents.index');
    }

    public function store(Request $request)
    {
        // Validate the request input
        $request->validate([
            'monthlyevent_name' => 'required',
            'description'=> 'required',
            'image_1' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image_2' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image_3' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'image_4' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    
        // Create a new MonthlyEvent instance
        $monthlyevents = new MonthlyEvent();
        $monthlyevents->monthlyevent_name = $request->monthlyevent_name;
        $monthlyevents->description = $request->description;
        $monthlyevents->status = $request->status;
    
        // Handle image uploads
        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1')->store('public/monthlyevents_images');
            $monthlyevents->image_1 = $image_1;
        }
    
        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2')->store('public/monthlyevents_images');
            $monthlyevents->image_2 = $image_2;
        }
    
        if ($request->hasFile('image_3')) {
            $image_3 = $request->file('image_3')->store('public/monthlyevents_images');
            $monthlyevents->image_3 = $image_3;
        }
    
        if ($request->hasFile('image_4')) {
            $image_4 = $request->file('image_4')->store('public/monthlyevents_images');
            $monthlyevents->image_4 = $image_4;
        }
    
        // Save the MonthlyEvent
        $monthlyevents->save();
    
        // Redirect to the event list with success message
        return redirect()->route('monthlyevent-list')
            ->with('success', 'Monthly Event created successfully.');
    }
    
    
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = MonthlyEvent::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-monthlyevent/' . encrypt($row->id));
                    return '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                })
                ->addColumn('activation', function($row){
                    $status = $row->status == "Y" ? 'fa fa-check' : 'fa fa-remove';
                    return '<a href="'.route('changestatus-monthlyevent', ['id' => $row->id]).'"><i class="'.$status.'"></i></a>';
                })
                ->addColumn('blockmonthlyevent', 'adminpanel.dining.monthlyevents.actionsBlock')
                ->rawColumns(['edit', 'activation', 'blockmonthlyevent'])
                ->make(true);
        }

        return view('adminpanel.dining.monthlyevents.list');
    }
 
    public function edit($id)
    {
        $monthlyeventID = decrypt($id);
        $data = MonthlyEvent::find($monthlyeventID);
        if (!$data) {
            return redirect()->route('monthlyevent-list')->with('error', 'Monthly Event not found.');
        }

        return view('adminpanel.dining.monthlyevents.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'monthlyevent_name' => 'required',
            'description' => 'required',
            'image_1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image_4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if (!$request->file('image_1') == "") {

            $img = $request->file('image_1')->getClientOriginalName();

            $imagePath = $request->file('image_1')->store('public/monthlyevents_images');
        } else {
            $path = "";
        }

        if (!$request->file('image_2') == "") {

            $img = $request->file('image_2')->getClientOriginalName();

            $imagePath = $request->file('image_2')->store('public/monthlyevents_images');
        } else {
            $path = "";
        }

        if (!$request->file('image_3') == "") {

            $img = $request->file('image_3')->getClientOriginalName();

            $imagePath = $request->file('image_3')->store('public/monthlyevents_images');
        } else {
            $path = "";
        }

        if (!$request->file('image_4') == "") {

            $img = $request->file('image_4')->getClientOriginalName();

            $imagePath = $request->file('image_4')->store('public/monthlyevents_images');
        } else {
            $path = "";
        }

        $data = MonthlyEvent::find($request->id);
        $data->monthlyevent_name = $request->monthlyevent_name;
        $data->description = $request->description;
        $data->status= $request->status;

        // Handle image uploads
        if ($request->hasFile('image_1')) {
            $image_1 = $request->file('image_1')->store('public/monthlyevents_images');
            $data->image_1 = $image_1;
        }

        if ($request->hasFile('image_2')) {
            $image_2 = $request->file('image_2')->store('public/monthlyevents_images');
            $data->image_2 = $image_2;
        }

        if ($request->hasFile('image_3')) {
            $image_3 = $request->file('image_3')->store('public/monthlyevents_images');
            $data->image_3 = $image_3;
        }

        if ($request->hasFile('image_4')) {
            $image_4 = $request->file('image_4')->store('public/monthlyevents_images');
            $data->image_4 = $image_4;
        }

        $data->save();

        \LogActivity::addToLog('Monthly Event updated.');

        return redirect()->route('monthlyevent-list')
            ->with('success', 'Monthly Event updated successfully.');
    }
    
    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  MonthlyEvent::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Monthly Event record '.$data->monthlyevent_name.' deactivated('.$id.').');

            return redirect()->route('monthlyevent-list')
            ->with('success', 'Monthly Event deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Monthly Event record '.$data->monthlyevent_name.' activated('.$id.').');

            
            return redirect()->route('monthlyevent-list')
            ->with('success', 'Monthly Event activate successfully.');
        }
    }
    

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  MonthlyEvent::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Monthly Event record '.$data->monthlyevent_name.' deleted('.$id.').');

        return redirect()->route('monthlyevent-list')
            ->with('success', 'Monthly Event deleted successfully.');
    }

    
}
