<?php

namespace App\Http\Controllers\Adminpanel\Home;

use App\Http\Controllers\Controller;
use App\Models\DiningContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DataTables;

class DiningContentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:dining-content-edit', ['only' => ['index, update']]);
    }

    public function index()
    {
        $data = DiningContent::first();

        if (!$data) {
            $data = DiningContent::create([
                'heading' => '',
                'description' => '',
                'image1' => '',
                'image2' => '',
                'image3' => '',
                'image4' => '',
                'image5' => '',
                'image6' => ''
            ]);
        }

        return view('adminpanel.home.dining_content.index', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required',
        ]);

        $data = DiningContent::findOrFail($request->id);

        // Handle image removals
        for ($i = 1; $i <= 6; $i++) {
            $removeField = "remove_image$i";
            $imageField = "image$i";
            if ($request->$removeField == "1" && $data->$imageField) {
                Storage::delete('public/' . $data->$imageField);
                $data->$imageField = null;
            }
        }

        $data->heading = $request->heading;
        $data->description = $request->description;

        // Handle new image uploads
        for ($i = 1; $i <= 6; $i++) {
            $imageField = "image$i";
            if ($request->hasFile($imageField)) {
                $imagePath = $request->file($imageField)->store('public/dining_content_images');
                $data->$imageField = $imagePath;
            }
        }

        $data->save();

        \LogActivity::addToLog('Record updated.');

        return redirect()->route('dining-content-edit')
            ->with('success', 'Dining Content updated successfully.');
    }
}
