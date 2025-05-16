<?php

namespace App\Http\Controllers\Adminpanel\Stay;

use App\Http\Controllers\Controller;
use App\Models\StayContent;
use Illuminate\Http\Request;
use DataTables;

class ContentController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:stay-content-edit', ['only' => ['index, update']]);
    }

    public function index()
{
    $data = StayContent::first();

    if (!$data) {
        $data = StayContent::create([
            'heading_en' => '',
            'description_en' => '',
            'heading2' => '',
            'description2' => ''
        ]);
    }

    return view('adminpanel.stay.content.index', compact('data'));
}

    public function update(Request $request)
    {
        $request->validate([
            'heading_en' => 'required',
            'description_en' => 'required',
            'heading2' => 'required',
            'description2' => 'required',
        ]);

        $data =  StayContent::find($request->id);
        $data->heading_en = $request->heading_en;
        $data->description_en = $request->description_en;
        $data->heading2 = $request->heading2;
        $data->description2 = $request->description2;
        $data->save();

        \LogActivity::addToLog('Content is updated.');

        return redirect()->route('stay-content-edit')
            ->with('success', 'Content is updated successfully.');
    }

}
