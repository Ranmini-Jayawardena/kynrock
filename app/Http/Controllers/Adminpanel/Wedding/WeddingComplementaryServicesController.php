<?php

namespace App\Http\Controllers\Adminpanel\Wedding;

use App\Http\Controllers\Controller;
use App\Models\WeddingComplementaryServices;
use Illuminate\Http\Request;
use DataTables;

class WeddingComplementaryServicesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:wedding-complementary-services-list|wedding-complementary-services-create|wedding-complementary-services-edit|wedding-complementary-services-delete', ['only' => ['list']]);
        $this->middleware('permission:wedding-complementary-services-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:wedding-complementary-services-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:wedding-complementary-services-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.wedding.complementary_services.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'description'=> 'required',
            
        ]);

      
    

        $features = new WeddingComplementaryServices();
        $features->service_name = $request->service_name;
        $features->description = $request->description;
        $features->order = $request->order;
        $features->status = $request->status;
        $features->save();
        $id = $features->id;

        \LogActivity::addToLog('New Feature '.$request->service_name.' added('.$id.').');

        return redirect()->route('wedding-complementary-services-list')
            ->with('success', 'Feature created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = WeddingComplementaryServices::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-wedding-complementary-services/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-wedding-complementary-services/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
                ->addColumn('blockfeatures', 'adminpanel.wedding.complementary_services.actionsBlock')
                ->rawColumns(['edit', 'activation','blockfeatures'])
                ->make(true);
        }

        return view('adminpanel.wedding.complementary_services.list');
    }

    public function edit($id)
    {
        $featuresID = decrypt($id);
        $data = WeddingComplementaryServices::find($featuresID);

        return view('adminpanel.wedding.complementary_services.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'description'=> 'required',
        ]);

      

        $data =  WeddingComplementaryServices::find($request->id);
        $data->service_name = $request->service_name;
        $data->description = $request->description;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Features record '.$data->service_name.' updated('.$id.').');

        return redirect()->route('wedding-complementary-services-list')
            ->with('success', 'Features updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  WeddingComplementaryServices::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->service_name.' deactivated('.$id.').');

            return redirect()->route('wedding-complementary-services-list')
            ->with('success', 'Feature deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Feature record '.$data->service_name.' activated('.$id.').');

            return redirect()->route('wedding-complementary-services-list')
            ->with('success', 'Feature activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  WeddingComplementaryServices::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Feature record '.$data->service_name.' deleted('.$id.').');

        return redirect()->route('wedding-complementary-services-list')
            ->with('success', 'Feature deleted successfully.');
    }
}
