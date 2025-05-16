<?php

namespace App\Http\Controllers\Adminpanel\Home;

use App\Http\Controllers\Controller;
use App\Models\FeaturesContent;
use Illuminate\Http\Request;
use DataTables;

class FeaturesContentController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:features-content-edit', ['only' => ['index, update']]);
    }

    public function index()
{
    $data = FeaturesContent::first();

    if (!$data) {
        $data = FeaturesContent::create([
            'heading' => '',
            'description' => '',
            'image' => '',
        ]);
    }

    return view('adminpanel.home.features_content.index', compact('data'));
}

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'

        ]);

        if(!$request->file('image')==""){
            $image = $request->file('image')->getClientOriginalName();
            $imagePath = $request->file('image')->store('public/features_content_images');
        }else{
            $path = "";
        }


        $data =  FeaturesContent::find($request->id);
        $data->heading = $request->heading;
        $data->description = $request->description;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/about_us_images');
            $data->image = $image;
        }        $data->save();

        \LogActivity::addToLog(' record updated.');

        return redirect()->route('features-content-edit')
            ->with('success', 'Features Content updated successfully.');
    }

}
