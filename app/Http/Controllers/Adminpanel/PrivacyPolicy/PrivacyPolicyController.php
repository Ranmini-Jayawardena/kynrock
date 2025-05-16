<?php

namespace App\Http\Controllers\Adminpanel\PrivacyPolicy;

use App\Http\Controllers\Controller;
use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;
use DataTables;

class PrivacyPolicyController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:policy-list|policy-create|policy-edit|policy-delete', ['only' => ['list']]);
        $this->middleware('permission:policy-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:policy-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:policy-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.privacy_policy.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'order' => 'required',
            'status' => 'required|in:Y,N',
        ]);
        
        $policy = new PrivacyPolicy();
        $policy->title = $request->title;
        $policy->description = $request->description;
        $policy->order = $request->order;
        $policy->status = $request->status;
        $policy->save();
        $id = $policy->id;

        \LogActivity::addToLog('New Privacy Policy '.$request->title.' added('.$id.').');

        return redirect()->route('policy-list')
            ->with('success', 'Privacy Policy created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = PrivacyPolicy::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-policy/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function($row){
                    if ( $row->status == "Y" )
                        $status ='fa fa-check';
                    else
                        $status ='fa fa-remove';

                    $btn = '<a href="changestatus-policy/'.$row->id.'/'.$row->cEnable.'"><i class="'.$status.'"></i></a>';

                    return $btn;
                })
                ->addColumn('blockpolicy', 'adminpanel.privacy_policy.actionsBlock')
                ->rawColumns(['edit', 'activation','blockpolicy'])
                ->make(true);
        }

        return view('adminpanel.privacy_policy.list');
    }

    public function edit($id)
    {
        $policyID = decrypt($id);
        $data = PrivacyPolicy::find($policyID);

        return view('adminpanel.privacy_policy.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'order' => 'required',
            'status' => 'required|in:Y,N'
        ]);

        $policy =  PrivacyPolicy::find($request->id);
        $policy->title = $request->title;
        $policy->description = $request->description;
        $policy->order = $request->order;
        $policy->status = $request->status;
        $policy->save();
        $id = $policy->id;

        \LogActivity::addToLog('Privacy Policy record '.$policy->title.' updated('.$id.').');

        return redirect()->route('policy-list')
            ->with('success', 'Privacy Policy updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  PrivacyPolicy::find($request->id);

        if ( $data->status == "Y" ) {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Privacy Policy record '.$data->title.' deactivated('.$id.').');

            return redirect()->route('policy-list')
            ->with('success', 'Privacy Policy deactivate successfully.');

        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Privacy Policy record '.$data->title.' activated('.$id.').');

            return redirect()->route('policy-list')
            ->with('success', 'Privacy Policy activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  PrivacyPolicy::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Privacy Policy record '.$data->title.' deleted('.$id.').');

        return redirect()->route('policy-list')
            ->with('success', 'Privacy Policy deleted successfully.');
    }
}
