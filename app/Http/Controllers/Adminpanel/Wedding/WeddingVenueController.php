<?php

namespace App\Http\Controllers\Adminpanel\Wedding;

use App\Http\Controllers\Controller;
use App\Models\WeddingVenues;
use Illuminate\Http\Request;
use DataTables;

class WeddingVenueController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:wedding-venue-list|wedding-venue-create|wedding-venue-edit|wedding-venue-delete', ['only' => ['list']]);
        $this->middleware('permission:wedding-venue-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:wedding-venue-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:wedding-venue-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.wedding.venues.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'venue_name' => 'required',
            'description'=> 'required',
            'icon'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            
        ]);

        if (!$request->file('icon') == "") {

            $img = $request->file('icon')->getClientOriginalName();

            $imagePath = $request->file('icon')->store('public/weddingvenuesimages');
        } else {
            $path = "";
        }

    

        $features = new WeddingVenues();
        $features->venue_name = $request->venue_name;
        $features->description = $request->description;
        $features->icon = $imagePath;
        $features->order = $request->order;
        $features->status = $request->status;
        $features->save();
        $id = $features->id;

        \LogActivity::addToLog('New Feature '.$request->venue_name.' added('.$id.').');

        return redirect()->route('wedding-venue-list')
            ->with('success', 'Feature created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = WeddingVenues::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('icon', function ($row) {
                    $imgPath = "storage/app/$row->icon";
                    $img = '<img src="'.$imgPath.'">';
                    return $img;
                })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-wedding-venue/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-wedding-venue/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
                ->addColumn('blockfeatures', 'adminpanel.wedding.venues.actionsBlock')
                ->rawColumns(['icon','edit', 'activation','blockfeatures'])
                ->make(true);
        }

        return view('adminpanel.wedding.venues.list');
    }

    public function edit($id)
    {
        $featuresID = decrypt($id);
        $data = WeddingVenues::find($featuresID);

        return view('adminpanel.wedding.venues.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'venue_name' => 'required',
            'description'=> 'required',
        ]);

        if (!$request->file('icon') == "") {

            $img = $request->file('icon')->getClientOriginalName();

            $imagePath = $request->file('icon')->store('public/weddingvenuesimages');
        } else {
            $path = "";
        }

        $data =  WeddingVenues::find($request->id);
        if(isset($imagePath)) {
            $data->icon = $imagePath;
        }
        $data->venue_name = $request->venue_name;
        $data->description = $request->description;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Features record '.$data->venue_name.' updated('.$id.').');

        return redirect()->route('wedding-venue-list')
            ->with('success', 'Features updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  WeddingVenues::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->venue_name.' deactivated('.$id.').');

            return redirect()->route('wedding-venue-list')
            ->with('success', 'Feature deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->title.' activated('.$id.').');

            return redirect()->route('wedding-venue-list')
            ->with('success', 'Feature activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  WeddingVenues::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Feature record '.$data->venue_name.' deleted('.$id.').');

        return redirect()->route('wedding-venue-list')
            ->with('success', 'Feature deleted successfully.');
    }
}
