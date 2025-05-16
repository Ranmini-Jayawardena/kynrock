<?php

namespace App\Http\Controllers\Adminpanel\Home;

use App\Http\Controllers\Controller;
use App\Models\TestimonialContent;
use Illuminate\Http\Request;
use DataTables;

class TestimonialContentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:testimonial-content-list|testimonial-content-create|testimonial-content-edit|testimonial-content-delete', ['only' => ['list']]);
        $this->middleware('permission:testimonial-content-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:testimonial-content-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:testimonial-content-delete', ['only' => ['block']]);
    }

    public function index()
    {
        return view('adminpanel.home.testimonial_content.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'testimonial' => 'required',
            'order' => 'required',
        ]);


        $testimonial = new TestimonialContent();
        $testimonial->name = $request->name;
        $testimonial->testimonial = $request->testimonial;
        $testimonial->order = $request->order;
        $testimonial->status = $request->status;
        $testimonial->save();
        $id = $testimonial->id;

        \LogActivity::addToLog('New Testimonial ' . $request->heading . ' added(' . $id . ').');

        return redirect()->route('testimonial-content-list')
            ->with('success', 'New Testimonial created successfully.');
    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = TestimonialContent::where('is_delete', 0)->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-testimonial-content/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function ($row) {
                    if ($row->status == "Y")
                        $status = 'fa fa-check';
                    else
                        $status = 'fa fa-remove';

                    $btn = '<a href="changestatus-testimonial-content/' . $row->id . '/' . $row->cEnable . '"><i class="' . $status . '"></i></a>';

                    return $btn;
                })
                ->addColumn('blocktestimonial', 'adminpanel.home.testimonial_content.actionsBlock')
                ->rawColumns(['edit', 'activation', 'blocktestimonial'])
                ->make(true);
        }

        return view('adminpanel.home.testimonial_content.list');
    }

    public function edit($id)
    {
        $testimonialID = decrypt($id);
        $data = TestimonialContent::find($testimonialID);

        return view('adminpanel.home.testimonial_content.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $request->validate([
            // 'status' => 'required|in:Y,N'
        ]);

     

        $data =  TestimonialContent::find($request->id);
        $data->name = $request->name;
        $data->testimonial = $request->testimonial;
        $data->order = $request->order;
        $data->status = $request->status;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Testimonial record ' . $data->heading . ' updated(' . $id . ').');

        return redirect()->route('testimonial-content-list')
            ->with('success', 'Testimonial updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  TestimonialContent::find($request->id);

        if ($data->status == "Y") {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Testimonial record ' . $data->heading . ' deactivated(' . $id . ').');

            return redirect()->route('testimonial-content-list')
                ->with('success', 'Testimonial deactivate successfully.');
        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Testimonial record ' . $data->heading . ' activated(' . $id . ').');

            return redirect()->route('testimonial-content-list')
                ->with('success', 'Testimonial activate successfully.');
        }
    }

    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  TestimonialContent::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;

        \LogActivity::addToLog('Testimonial record ' . $data->heading . ' deleted(' . $id . ').');

        return redirect()->route('testimonial-content-list')
            ->with('success', 'Testimonial deleted successfully.');
    }
}
