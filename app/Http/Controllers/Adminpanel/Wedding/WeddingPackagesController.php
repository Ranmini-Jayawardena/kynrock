<?php

namespace App\Http\Controllers\Adminpanel\Wedding;

use App\Http\Controllers\Controller;
use App\Models\WeddingPackages;
use Illuminate\Http\Request;
use DataTables;

class WeddingPackagesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:wedding-package-list|wedding-package-create|wedding-package-edit|wedding-package-delete', ['only' => ['list']]);
        $this->middleware('permission:wedding-package-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:wedding-package-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:wedding-package-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.wedding.wedding_packages.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'package_name' => 'required',
            'description'=> 'required',
            'order'=>'required'
       
            
        ]);

      
    

        $features = new WeddingPackages();
        $features->package_name = $request->package_name;
        $features->description = $request->description;
        $features->order = $request->order;
        $features->status = $request->status;
        $features->save();
        $id = $features->id;

        \LogActivity::addToLog('New Feature '.$request->package_name.' added('.$id.').');

        return redirect()->route('wedding-package-list')
            ->with('success', 'Feature created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = WeddingPackages::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
               
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-wedding-package/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-wedding-package/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
                ->addColumn('blockpackages', 'adminpanel.wedding.wedding_packages.actionsBlock')
                ->rawColumns(['edit', 'activation','blockpackages'])
                ->make(true);
        }

        return view('adminpanel.wedding.wedding_packages.list');
    }

    public function edit($id)
    {
        $featuresID = decrypt($id);
        $data = WeddingPackages::find($featuresID);

        return view('adminpanel.wedding.wedding_packages.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'package_name' => 'required',
            'description'=> 'required',
            'order'=>'required'
        ]);

        

        $data =  WeddingPackages::find($request->id);
        $data->package_name = $request->package_name;
        $data->description = $request->description;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Features record '.$data->package_name.' updated('.$id.').');

        return redirect()->route('wedding-package-list')
            ->with('success', 'Features updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  WeddingPackages::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->package_name.' deactivated('.$id.').');

            return redirect()->route('wedding-package-list')
            ->with('success', 'Feature deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->title.' activated('.$id.').');

            return redirect()->route('wedding-package-list')
            ->with('success', 'Feature activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  WeddingPackages::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Feature record '.$data->package_name.' deleted('.$id.').');

        return redirect()->route('wedding-package-list')
            ->with('success', 'Feature deleted successfully.');
    }
}
