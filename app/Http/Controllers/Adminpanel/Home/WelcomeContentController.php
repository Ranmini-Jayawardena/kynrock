<?php

namespace App\Http\Controllers\Adminpanel\Home;

use App\Http\Controllers\Controller;
use App\Models\WelcomeContent;
use Illuminate\Http\Request;
use DataTables;

class WelcomeContentController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:welcome-content-edit', ['only' => ['index, update']]);
    }

    public function index()
{
    $data = WelcomeContent::first();

    if (!$data) {
        $data = WelcomeContent::create([
            'heading' => '',
            'description' => '',
        ]);
    }

    return view('adminpanel.home.welcome_content.index', compact('data'));
}

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required'
        ]);

        $data =  WelcomeContent::find($request->id);
        $data->heading = $request->heading;
        $data->description = $request->description;
        $data->save();

        \LogActivity::addToLog(' record updated.');

        return redirect()->route('welcome-content-edit')
            ->with('success', 'Welcome Content updated successfully.');
    }

}
