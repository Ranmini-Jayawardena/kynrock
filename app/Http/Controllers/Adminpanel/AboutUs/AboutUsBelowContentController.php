<?php

namespace App\Http\Controllers\Adminpanel\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use Illuminate\Http\Request;
use DataTables;

class AboutUsBelowContentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:about-us-below-content-edit', ['only' => ['index', 'update']]);
    }

    public function index()
    {
        $data = AboutUsBelowContent::first();

        if (!$data) {
            $data = AboutUsBelowContent::create([
                'location_title' => '',
                'location_description' => '',
                'location_image' => '',
                'booknow_title' => '',
                'booknow_description' => '',
                'booknow_image' => '',
            ]);
        }

        return view('adminpanel.about_us.about_us_below_content.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'location_title' => 'required',
            'booknow_title' => 'required',

        ]);

        if (!$request->file('location_image') == "") {

            $img = $request->file('location_image')->getClientOriginalName();

            $imagePath = $request->file('location_image')->store('public/aboutusbelowcontentimages');
        } else {
            $path = "";
        }

        if (!$request->file('booknow_image') == "") {

            $img = $request->file('booknow_image')->getClientOriginalName();

            $imagePath = $request->file('booknow_image')->store('public/aboutusbelowcontentimages');
        } else {
            $path = "";
        }

        $data = AboutUsBelowContent::find($request->id);
        $data->location_title = $request->location_title;
        $data->location_description = $request->location_description;
        $data->booknow_title = $request->booknow_title;
        $data->booknow_description = $request->booknow_description;

        // Handle image uploads
        if ($request->hasFile('location_image')) {
            $location_image = $request->file('location_image')->store('public/aboutusbelowcontentimages');
            $data->location_image = $location_image;
        }

        if ($request->hasFile('booknow_image')) {
            $booknow_image = $request->file('booknow_image')->store('public/aboutusbelowcontentimages');
            $data->booknow_image = $booknow_image;
        }

        $data->save();

        \LogActivity::addToLog('About Us Below Content record updated.');

        return redirect()->route('about-us-below-content-edit')
            ->with('success', 'About Us Below Content updated successfully.');
    }
}
