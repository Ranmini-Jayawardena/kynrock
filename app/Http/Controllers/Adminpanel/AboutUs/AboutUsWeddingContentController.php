<?php

namespace App\Http\Controllers\Adminpanel\AboutUs;

use App\Http\Controllers\Controller;
use App\Models\AboutUsWeddingContent;
use Illuminate\Http\Request;
use DataTables;

class AboutUsWeddingContentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:about-us-wedding-content-edit', ['only' => ['index', 'update']]);
    }

    public function index()
    {
        $data = AboutUsWeddingContent::first();

        if (!$data) {
            $data = AboutUsWeddingContent::create([
                'title1' => '',
                'title2' => '',
                'description' => '',
            ]);
        }

        return view('adminpanel.about_us.about_us_wedding_content.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title1' => 'required',
            'title2' => 'required',
            'description' => 'required',
        ]);

        

        

        $data = AboutUsWeddingContent::find($request->id);
        $data->title1 = $request->title1;
        $data->title2 = $request->title2;
        $data->description = $request->description;
        

        
        $data->save();

        \LogActivity::addToLog('About Us Wedding Content record updated.');

        return redirect()->route('about-us-wedding-content-edit')
            ->with('success', 'About Us Wedding Content updated successfully.');
    }
}
