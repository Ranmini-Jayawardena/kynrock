<?php

namespace App\Http\Controllers\Adminpanel\Home;

use App\Http\Controllers\Controller;
use App\Models\VenueContent;
use Illuminate\Http\Request;
use DataTables;

class VenueContentContoller extends Controller
{
    function __construct()
    {

        $this->middleware('permission:venue-content-edit', ['only' => ['index, update']]);
    }

    public function index()
{
    $data = VenueContent::first();

    if (!$data) {
        $data = VenueContent::create([
            'heading' => '',
            'description' => '',
            'image' => '',
        ]);
    }

    return view('adminpanel.home.venue_content.index', compact('data'));
}

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required'
        ]);

        if(!request()->file('image') == ""){
            $img = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->store('public/venue_content_images');
        }else{
            $path = "";
        }

        $data =  VenueContent::find($request->id);
        $data->heading = $request->heading;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/venue_content_images');
            $data->image = $image;
        }        
        $data->save();


        \LogActivity::addToLog(' record updated.');

        return redirect()->route('venue-content-edit')
            ->with('success', 'Venue Content updated successfully.');
    }

}
