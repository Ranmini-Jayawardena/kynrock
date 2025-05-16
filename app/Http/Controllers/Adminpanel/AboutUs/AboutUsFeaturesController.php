<?php

namespace App\Http\Controllers\Adminpanel\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutUsFeatures;
use Illuminate\Http\Request;
use DataTables;

class AboutUsFeaturesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:about-us-features-list|about-us-features-create|about-us-features-edit|about-us-features-delete', ['only' => ['list']]);
        $this->middleware('permission:about-us-features-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:about-us-features-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:about-us-features-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.about_us.about_us_features.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required|in:Y,N',
            'order' => 'required'
        ]);

        if (!$request->file('image') == "") {

            $img = $request->file('image')->getClientOriginalName();

            $imagePath = $request->file('image')->store('public/aboutusfeaturesimages');
        } else {
            $path = "";
        }

    

        $features = new AboutUsFeatures();
        $features->title = $request->title;
        $features->description = $request->description;
        $features->image = $imagePath;
        $features->order = $request->order;
        $features->status = $request->status;
        $features->save();
        $id = $features->id;

        \LogActivity::addToLog('New Feature '.$request->title.' added('.$id.').');

        return redirect()->route('about-us-features-list')
            ->with('success', 'Feature created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = AboutUsFeatures::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('image', function ($row) {
                    $imgPath = "storage/app/$row->image";
                    $img = '<img src="'.$imgPath.'">';
                    return $img;
                })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-about-us-features/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-about-us-features/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
                ->addColumn('blockfeatures', 'adminpanel.about_us.about_us_features.actionsBlock')
                ->rawColumns(['image','edit', 'activation','blockfeatures'])
                ->make(true);
        }

        return view('adminpanel.about_us.about_us_features.list');
    }

    public function edit($id)
    {
        $featuresID = decrypt($id);
        $data = AboutUsFeatures::find($featuresID);

        return view('adminpanel.about_us.about_us_features.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            // 'status' => 'required|in:Y,N'
        ]);

        if (!$request->file('image') == "") {

            $img = $request->file('image')->getClientOriginalName();

            $imagePath = $request->file('image')->store('public/aboutusfeaturesimages');
        } else {
            $path = "";
        }

        $data =  AboutUsFeatures::find($request->id);
        if(isset($imagePath)) {
            $data->image = $imagePath;
        }
        $data->title = $request->title;
        $data->description = $request->description;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Features record '.$data->title.' updated('.$id.').');

        return redirect()->route('about-us-features-list')
            ->with('success', 'Features updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  AboutUsFeatures::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->title.' deactivated('.$id.').');

            return redirect()->route('about-us-features-list')
            ->with('success', 'Feature deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->title.' activated('.$id.').');

            return redirect()->route('about-us-features-list')
            ->with('success', 'Feature activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  AboutUsFeatures::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Feature record '.$data->title_en.' deleted('.$id.').');

        return redirect()->route('about-us-features-list')
            ->with('success', 'Feature deleted successfully.');
    }
}
