<?php

namespace App\Http\Controllers\Adminpanel\Wedding;

use App\Http\Controllers\Controller;
use App\Models\WeddingDiningFeatures;
use Illuminate\Http\Request;
use DataTables;

class WeddingDiningFeaturesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:wedding-dining-features-list|wedding-dining-features-create|wedding-dining-features-edit|wedding-dining-features-delete', ['only' => ['list']]);
        $this->middleware('permission:wedding-dining-features-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:wedding-dining-features-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:wedding-dining-features-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.wedding.dining_features.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'feature_name' => 'required',
            'description'=> 'required',
            'icon'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048'
            
        ]);

        if (!$request->file('icon') == "") {

            $img = $request->file('icon')->getClientOriginalName();

            $imagePath = $request->file('icon')->store('public/WeddingDiningFeaturesimages');
        } else {
            $path = "";
        }

    

        $features = new WeddingDiningFeatures();
        $features->feature_name = $request->feature_name;
        $features->description = $request->description;
        $features->icon = $imagePath;
        $features->order = $request->order;
        $features->status = $request->status;
        $features->save();
        $id = $features->id;

        \LogActivity::addToLog('New Feature '.$request->feature_name.' added('.$id.').');

        return redirect()->route('wedding-dining-features-list')
            ->with('success', 'Feature created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = WeddingDiningFeatures::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('icon', function ($row) {
                    $imgPath = "storage/app/$row->icon";
                    $img = '<img src="'.$imgPath.'">';
                    return $img;
                })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-wedding-dining-features/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-wedding-dining-features/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
                ->addColumn('blockfeatures', 'adminpanel.wedding.dining_features.actionsBlock')
                ->rawColumns(['icon','edit', 'activation','blockfeatures'])
                ->make(true);
        }

        return view('adminpanel.wedding.dining_features.list');
    }

    public function edit($id)
    {
        $featuresID = decrypt($id);
        $data = WeddingDiningFeatures::find($featuresID);

        return view('adminpanel.wedding.dining_features.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'feature_name' => 'required',
            'description'=> 'required',
        ]);

        if (!$request->file('icon') == "") {

            $img = $request->file('icon')->getClientOriginalName();

            $imagePath = $request->file('icon')->store('public/WeddingDiningFeaturesimages');
        } else {
            $path = "";
        }

        $data =  WeddingDiningFeatures::find($request->id);
        if(isset($imagePath)) {
            $data->icon = $imagePath;
        }
        $data->feature_name = $request->feature_name;
        $data->description = $request->description;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Features record '.$data->feature_name.' updated('.$id.').');

        return redirect()->route('wedding-dining-features-list')
            ->with('success', 'Features updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  WeddingDiningFeatures::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->feature_name.' deactivated('.$id.').');

            return redirect()->route('wedding-dining-features-list')
            ->with('success', 'Feature deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->feature_name.' activated('.$id.').');

            return redirect()->route('wedding-dining-features-list')
            ->with('success', 'Feature activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  WeddingDiningFeatures::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Feature record '.$data->feature_name.' deleted('.$id.').');

        return redirect()->route('wedding-dining-features-list')
            ->with('success', 'Feature deleted successfully.');
    }
}
