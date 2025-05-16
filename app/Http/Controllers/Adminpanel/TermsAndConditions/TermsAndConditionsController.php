<?php

namespace App\Http\Controllers\Adminpanel\TermsAndConditions;

use App\Http\Controllers\Controller;
use App\Models\TermsAndConditions;
use Illuminate\Http\Request;
use DataTables;

class TermsAndConditionsController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:terms-list|terms-create|terms-edit|terms-delete', ['only' => ['list']]);
        $this->middleware('permission:terms-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:terms-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:terms-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.terms_and_conditions.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'order' => 'required',
            'status' => 'required|in:Y,N',
           
        ]);
        
        $terms = new TermsAndConditions();
        $terms->title = $request->title;
        $terms->description = $request->description;
        $terms->order = $request->order;
        $terms->status = $request->status;
        $terms->save();
        $id = $terms->id;

        \LogActivity::addToLog('New Terms and Conditions '.$request->title.' added('.$id.').');

        return redirect()->route('terms-list')
            ->with('success', 'Terms and Conditions created successfully.');
    }

    public function list(Request $request)
    {
        
        if ($request->ajax()) {
            $data = TermsAndConditions::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-terms/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-terms/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
                ->addColumn('blockterms', 'adminpanel.terms_and_conditions.actionsBlock')
                ->rawColumns(['edit', 'activation','blockterms'])
                ->make(true);
               
        }
        

        return view('adminpanel.terms_and_conditions.list');
    }

    public function edit($id)
    {
        $termsID = decrypt($id);
        $data = TermsAndConditions::find($termsID);

        return view('adminpanel.terms_and_conditions.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'order' => 'required',
            'status' => 'required|in:Y,N'
        ]);

        $terms =  TermsAndConditions::find($request->id);
        $terms->title = $request->title;
        $terms->description = $request->description;
        $terms->order = $request->order;
        $terms->status = $request->status;
        $terms->save();
        $id = $terms->id;

        \LogActivity::addToLog('Terms and Conditions record '.$terms->title.' updated('.$id.').');

        return redirect()->route('terms-list')
            ->with('success', 'Terms and Conditions updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  TermsAndConditions::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Terms and Conditions record '.$data->title.' deactivated('.$id.').');

            return redirect()->route('terms-list')
            ->with('success', 'Terms and Conditions deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Terms and Conditions record '.$data->title.' activated('.$id.').');

            return redirect()->route('terms-list')
            ->with('success', 'Terms and Conditions activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  TermsAndConditions::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Terms and Conditions record '.$data->title.' deleted('.$id.').');

        return redirect()->route('terms-list')
            ->with('success', 'Terms and Conditions deleted successfully.');
    }
}
