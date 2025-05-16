<?php

namespace App\Http\Controllers\Adminpanel\Home;

use App\Http\Controllers\Controller;
use App\Models\RoomContent;
use Illuminate\Http\Request;
use DataTables;

class RoomContentController extends Controller
{
    function __construct()
    {

        $this->middleware('permission:room-content-edit', ['only' => ['index, update']]);
    }

    public function index()
{
    $data = RoomContent::first();

    if (!$data) {
        $data = RoomContent::create([
            'heading' => '',
            'description' => '',
        ]);
    }

    return view('adminpanel.home.room_content.index', compact('data'));
}

    public function update(Request $request)
    {
        $request->validate([
            'heading' => 'required',
            'description' => 'required'
        ]);

        $data =  RoomContent::find($request->id);
        $data->heading = $request->heading;
        $data->description = $request->description;
        $data->save();

        \LogActivity::addToLog(' record updated.');

        return redirect()->route('room-content-edit')
            ->with('success', 'Room Content updated successfully.');
    }

}
