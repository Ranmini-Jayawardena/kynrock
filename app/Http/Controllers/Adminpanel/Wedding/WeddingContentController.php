<?php

namespace App\Http\Controllers\Adminpanel\Wedding;

use App\Http\Controllers\Controller;
use App\Models\WeddingContent;
use Illuminate\Http\Request;
use DataTables;

class WeddingContentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:wedding-content-edit', ['only' => ['index', 'update']]);
    }

    public function index()
    {
        $data = WeddingContent::first();

        if (!$data) {
            $data = WeddingContent::create([
                'title1' => '',
                'description1' => '',
                'title2' => '',
                'image' => '',
                'wedding_venue_title' => '',
                'wedding_venue_description1' => '',
                'wedding_venue_description2' => '',
                'wedding_package_title' => '',
                'wedding_package_description' => '',
                'wedding_package_image' => '',
                'cultinary_title' => '',
                'cultinary_description' => '',
                'services_title' => '',
                'services_description' => '',
                'services_image' => '',
                'plan_wedding_title' => '',
                'plan_wedding_description' => '',
            ]);
        }

        return view('adminpanel.wedding.content.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title1' => 'required',
            'description1' => 'required',
            'title2' => 'required',
            'wedding_venue_title' => 'required',
            'wedding_venue_description1' => 'required',
            'wedding_venue_description2' => 'required',
            'wedding_package_title' => 'required',
            'wedding_package_description' => 'required',
            'cultinary_title' => 'required',
            'cultinary_description' => 'required',
            'services_title' => 'required',
            'services_description' => 'required',
            'plan_wedding_title' => 'required',
            'plan_wedding_description' => 'required',
            
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'wedding_package_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',
            'services_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480',



        ]);

        if (!$request->file('image') == "") {

            $img = $request->file('image')->getClientOriginalName();

            $imagePath = $request->file('image')->store('public/wedding_content_images');
        } else {
            $path = "";
        }

        if (!$request->file('wedding_package_image') == "") {

            $img = $request->file('wedding_package_image')->getClientOriginalName();

            $imagePath = $request->file('wedding_package_image')->store('public/wedding_content_images');
        } else {
            $path = "";
        }

        if (!$request->file('services_image') == "") {

            $img = $request->file('services_image')->getClientOriginalName();

            $imagePath = $request->file('services_image')->store('public/wedding_content_images');
        } else {
            $path = "";
        }

        $data = WeddingContent::find($request->id);
        $data->title1 = $request->title1;
        $data->description1 = $request->description1;
        $data->title2 = $request->title2;
        $data->wedding_venue_title = $request->wedding_venue_title;
        $data->wedding_venue_description1 = $request->wedding_venue_description1;
        $data->wedding_venue_description2 = $request->wedding_venue_description2;
        $data->wedding_package_title = $request->wedding_package_title;
        $data->wedding_package_description = $request->wedding_package_description;
        $data->cultinary_title = $request->cultinary_title;
        $data->cultinary_description = $request->cultinary_description;
        $data->services_title = $request->services_title;
        $data->services_description = $request->services_description;
        $data->plan_wedding_title = $request->plan_wedding_title;
        $data->plan_wedding_description = $request->plan_wedding_description;


        // Handle image uploads
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('public/wedding_content_images');
            $data->image = $image;
        }

        if ($request->hasFile('wedding_package_image')) {
            $wedding_package_image = $request->file('wedding_package_image')->store('public/wedding_content_images');
            $data->wedding_package_image = $wedding_package_image;
        }

        if ($request->hasFile('services_image')) {
            $services_image = $request->file('services_image')->store('public/wedding_content_images');
            $data->services_image = $services_image;
        }

        $data->save();

        \LogActivity::addToLog('Wedding Content record updated.');

        return redirect()->route('wedding-content-edit')
            ->with('success', 'Wedding Content updated successfully.');
    }
}
