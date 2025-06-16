<?php

namespace App\Http\Controllers\Adminpanel\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutUsContent;
use Illuminate\Http\Request;
use DataTables;

class AboutUsContentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:about-us-content-edit', ['only' => ['index', 'update']]);
    }

    public function index()
    {
        $data = AboutUsContent::first();

        if (!$data) {
            $data = AboutUsContent::create([
                'title1' => '',
                'content1' => '',
                'title2' => '',
                'content2' => '',
                'image1' => '',
                'feature_icon1' => '',
                'feature_name1' => '',
                'feature_description1' => '',
                'feature_icon2' => '',
                'feature_name2' => '',
                'feature_description2' => '',
                'feature_icon3' => '',
                'feature_name3' => '',
                'feature_description3' => '',
                'feature_icon4' => '',
                'feature_name4' => '',
                'feature_description4' => '',
                // 'feature_icon5' => '',
                // 'feature_name5' => '',
                // 'feature_description5' => '',

            ]);
        }

        return view('adminpanel.about_us.about_us_content.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title1' => 'required',
            'content1' => 'required',
            'title2' => 'required',
            'content2' => 'required',
            'image1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20480'
        ]);

        if (!$request->file('image1') == "") {

            $img = $request->file('image1')->getClientOriginalName();

            $imagePath = $request->file('image1')->store('public/aboutuscontentimages');
        } else {
            $path = "";
        }

        if (!$request->file('feature_icon1') == "") {

            $img = $request->file('feature_icon1')->getClientOriginalName();

            $imagePath = $request->file('feature_icon1')->store('public/aboutuscontentimages');
        } else {
            $path = "";
        }

        if (!$request->file('feature_icon2') == "") {

            $img = $request->file('feature_icon2')->getClientOriginalName();

            $imagePath = $request->file('feature_icon2')->store('public/aboutuscontentimages');
        } else {
            $path = "";
        }

        if (!$request->file('feature_icon3') == "") {

            $img = $request->file('feature_icon3')->getClientOriginalName();

            $imagePath = $request->file('feature_icon3')->store('public/aboutuscontentimages');
        } else {
            $path = "";
        }

          if (!$request->file('feature_icon4') == "") {

            $img = $request->file('feature_icon4')->getClientOriginalName();

            $imagePath = $request->file('feature_icon4')->store('public/aboutuscontentimages');
        } else {
            $path = "";
        }

        // if (!$request->file('feature_icon5') == "") {

        //     $img = $request->file('feature_icon5')->getClientOriginalName();

        //     $imagePath = $request->file('feature_icon5')->store('public/aboutuscontentimages');
        // } else {
        //     $path = "";
        // }



        $data = AboutUsContent::find($request->id);
        $data->title1 = $request->title1;
        $data->content1 = $request->content1;
        $data->title2 = $request->title2;
        $data->content2 = $request->content2;
        $data->feature_name1 = $request->feature_name1;
        $data->feature_description1 = $request->feature_description1;
        $data->feature_name2 = $request->feature_name2;
        $data->feature_description2 = $request->feature_description2;
        $data->feature_name3 = $request->feature_name3;
        $data->feature_description3 = $request->feature_description3;
        $data->feature_name4 = $request->feature_name4;
        $data->feature_description4 = $request->feature_description4;
        // $data->feature_name5 = $request->feature_name5;
        // $data->feature_description5 = $request->feature_description5;



        // Handle image uploads
        if ($request->hasFile('image1')) {
            $image1 = $request->file('image1')->store('public/aboutuscontentimages');
            $data->image1 = $image1;
        }

        if ($request->hasFile('feature_icon1')) {
            $feature_icon1 = $request->file('feature_icon1')->store('public/aboutuscontentimages');
            $data->feature_icon1 = $feature_icon1;
        }
        if ($request->hasFile('feature_icon2')) {
            $feature_icon2 = $request->file('feature_icon2')->store('public/aboutuscontentimages');
            $data->feature_icon2 = $feature_icon2;
        }
        if ($request->hasFile('feature_icon3')) {
            $feature_icon3 = $request->file('feature_icon3')->store('public/aboutuscontentimages');
            $data->feature_icon3 = $feature_icon3;
        }
        if ($request->hasFile('feature_icon4')) {
            $feature_icon4 = $request->file('feature_icon4')->store('public/aboutuscontentimages');
            $data->feature_icon4 = $feature_icon4;
        }
        // if ($request->hasFile('feature_icon5')) {
        //     $feature_icon5 = $request->file('feature_icon5')->store('public/aboutuscontentimages');
        //     $data->feature_icon5 = $feature_icon5;
        // }

        $data->save();

        \LogActivity::addToLog('About Us record updated.');

        return redirect()->route('about-us-content-edit')
            ->with('success', 'About Us Content updated successfully.');
    }
}
