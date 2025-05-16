<?php

namespace App\Http\Controllers\Adminpanel\ContactUs;

use App\Http\Controllers\Controller;
use App\Models\Enquiry;
use App\Models\MainSlider;
use Illuminate\Http\Request;
use DataTables;

class EnquiryController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:enquiry-list', ['only' => ['list, view']]);

    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Enquiry::get();
            // die(var_dump($data));
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('view', function ($row) {
                    $view_url = url('enquiry-view/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $view_url . '"><i class="fa fa-file-text"></i></a>';
                    return $btn;
                })
                ->rawColumns(['view'])
                ->make(true);
        }

        return view('adminpanel.contactusdetails.enquiry.index');
    }


    public function view($id)
    {
        $ID = decrypt($id);
        $data = Enquiry::find($ID);

        return view('adminpanel.contactusdetails.enquiry.view', ['data' => $data]);
    }

}
