<?php

namespace App\Http\Controllers\Adminpanel\Home;

use App\Http\Controllers\Controller;
use App\Models\LocationContent;
use Illuminate\Http\Request;
use DataTables;

class LocationContentController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:location-content-edit', ['only' => ['index, update']]);
    }

    public function index()
{
    $data = LocationContent::first();

    if (!$data) {
        $data = LocationContent::create([
            'heading' => '',
            'description' => '',
        ]);
    }

    return view('adminpanel.home.location_content.index', compact('data'));
}

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required'
        ]);

        $data =  LocationContent::find($request->id);
        $data->heading = $request->heading;
        $data->description = $request->description;      
        $data->save();


        \LogActivity::addToLog(' record updated.');

        return redirect()->route('location-content-edit')
            ->with('success', 'Location Content updated successfully.');
    }

}
