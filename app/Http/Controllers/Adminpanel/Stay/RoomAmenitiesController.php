<?php

namespace App\Http\Controllers\Adminpanel\Stay;

use App\Http\Controllers\Controller;
use App\Models\RoomAmenities;
use Illuminate\Http\Request;
use DataTables;

class RoomAmenitiesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:room-amenities-list|room-amenities-create|room-amenities-edit|room-amenities-delete', ['only' => ['list']]);
        $this->middleware('permission:room-amenities-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:room-amenities-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:room-amenities-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.stay.room_amenities.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'amenties_name' => 'required',
            'icon'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            
        ]);

        if (!$request->file('icon') == "") {

            $img = $request->file('icon')->getClientOriginalName();

            $imagePath = $request->file('icon')->store('public/roomAmenitiesImages');
        } else {
            $path = "";
        }

    

        $features = new RoomAmenities();
        $features->amenties_name = $request->amenties_name;
        $features->icon = $imagePath;
        $features->order = $request->order;
        $features->status = $request->status;
        $features->save();
        $id = $features->id;

        \LogActivity::addToLog('New Feature '.$request->amenties_name.' added('.$id.').');

        return redirect()->route('room-amenities-list')
            ->with('success', 'Feature created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = RoomAmenities::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('icon', function ($row) {
                    $imgPath = "storage/app/$row->icon";
                    $img = '<img src="'.$imgPath.'">';
                    return $img;
                })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-room-amenities/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-room-amenities/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
                ->addColumn('blockamenities', 'adminpanel.stay.room_amenities.actionsBlock')
                ->rawColumns(['icon','edit', 'activation','blockamenities'])
                ->make(true);
        }

        return view('adminpanel.stay.room_amenities.list');
    }

    public function edit($id)
    {
        $featuresID = decrypt($id);
        $data = RoomAmenities::find($featuresID);

        return view('adminpanel.stay.room_amenities.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'amenties_name' => 'required',
            'icon'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'

        ]);

        if (!$request->file('icon') == "") {

            $img = $request->file('icon')->getClientOriginalName();

            $imagePath = $request->file('icon')->store('public/roomAmenitiesImages');
        } else {
            $path = "";
        }

        $data =  RoomAmenities::find($request->id);
        if(isset($imagePath)) {
            $data->icon = $imagePath;
        }
        $data->amenties_name = $request->amenties_name;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Features record '.$data->amenties_name.' updated('.$id.').');

        return redirect()->route('room-amenities-list')
            ->with('success', 'Features updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  RoomAmenities::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->amenties_name.' deactivated('.$id.').');

            return redirect()->route('room-amenities-list')
            ->with('success', 'Feature deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->amenties_name.' activated('.$id.').');

            return redirect()->route('room-amenities-list')
            ->with('success', 'Feature activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  RoomAmenities::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Feature record '.$data->amenties_name.' deleted('.$id.').');

        return redirect()->route('room-amenities-list')
            ->with('success', 'Feature deleted successfully.');
    }
}
