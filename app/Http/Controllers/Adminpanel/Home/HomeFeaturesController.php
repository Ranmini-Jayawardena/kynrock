<?php

namespace App\Http\Controllers\Adminpanel\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeFeatures;
use Illuminate\Http\Request;
use DataTables;

class HomeFeaturesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:home-features-list|home-features-create|home-features-edit|home-features-delete', ['only' => ['list']]);
        $this->middleware('permission:home-features-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:home-features-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:home-features-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.home.features.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'image_name' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:20480',
            'order' => 'required'
        ]);

        if (!$request->file('image_name') == "") {

            $img = $request->file('image_name')->getClientOriginalName();

            $imagePath = $request->file('image_name')->store('public/home_features_images');
        } else {
            $path = "";
        }



        $features = new HomeFeatures();
        $features->heading = $request->heading;
        $features->image_name = $imagePath;
        $features->order = $request->order;
        $features->status = $request->status;
        $features->save();
        $id = $features->id;

        \LogActivity::addToLog('New main Feature ' . $request->heading . ' added(' . $id . ').');

        return redirect()->route('home-features-list')
            ->with('success', 'New Feature created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = HomeFeatures::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('feature_image', function ($row) {
                    $imgPath = "storage/app/$row->image_name";
                    $img = '  <div style="background-color: #000; padding: 5px; text-align: center;">
            <img src="' . $imgPath . '"  />
        </div>';
                    return $img;
                })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-home-features/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function ($row) {
                    if ($row->status == "Y")
                        $status = 'fa fa-check';
                    else
                        $status = 'fa fa-remove';

                    $btn = '<a href="changestatus-home-features/' . $row->id . '/' . $row->cEnable . '"><i class="' . $status . '"></i></a>';

                    return $btn;
                })
                ->addColumn('blockfeatures', 'adminpanel.home.features.actionsBlock')
                ->rawColumns(['feature_image', 'edit', 'activation', 'blockfeatures'])
                ->make(true);
        }

        return view('adminpanel.home.features.list');
    }

    public function edit($id)
    {
        $featuresID = decrypt($id);
        $data = HomeFeatures::find($featuresID);

        return view('adminpanel.home.features.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'image_name' => 'image|mimes:jpg,png,jpeg,gif,svg|max:20480',
            // 'status' => 'required|in:Y,N'
        ]);

        if (!$request->file('image_name') == "") {

            $img = $request->file('image_name')->getClientOriginalName();

            $imagePath = $request->file('image_name')->store('public/sliderimages');
        } else {
            $path = "";
        }

        $data =  HomeFeatures::find($request->id);
        $data->heading = $request->heading;
        if (isset($imagePath)) {
            $data->image_name = $imagePath;
        }
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Main slider record ' . $data->heading . ' updated(' . $id . ').');

        return redirect()->route('home-features-list')
            ->with('success', 'Main slider updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  HomeFeatures::find($request->id);

        if ($data->status == "Y") {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Main slider record ' . $data->heading . ' deactivated(' . $id . ').');

            return redirect()->route('home-features-list')
                ->with('success', 'Main slider deactivate successfully.');
        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Main slider record ' . $data->heading . ' activated(' . $id . ').');

            return redirect()->route('home-features-list')
                ->with('success', 'Main slider activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  HomeFeatures::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Main slider record ' . $data->heading . ' deleted(' . $id . ').');

        return redirect()->route('home-features-list')
            ->with('success', 'Main slider deleted successfully.');
    }
}
