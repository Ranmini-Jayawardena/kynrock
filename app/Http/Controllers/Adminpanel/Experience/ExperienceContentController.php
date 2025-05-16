<?php

namespace App\Http\Controllers\Adminpanel\Experience;

use App\Http\Controllers\Controller;
use App\Models\ExperienceContent;
use Illuminate\Http\Request;
use DataTables;

class ExperienceContentController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:experience-content-edit', ['only' => ['index, update']]);
    }

    public function index()
{
    $data = ExperienceContent::first();

    if (!$data) {
        $data = ExperienceContent::create([
            'heading' => '',
            'description' => '',
            'image' => '',
        ]);
    }

    return view('adminpanel.experience.experience_content.index', compact('data'));
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

        $data =  ExperienceContent::find($request->id);
        $data->heading = $request->heading;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/venue_content_images');
            $data->image = $image;
        }        
        $data->save();


        \LogActivity::addToLog(' record updated.');

        return redirect()->route('experience-content-edit')
            ->with('success', 'Experience Content updated successfully.');
    }

}
