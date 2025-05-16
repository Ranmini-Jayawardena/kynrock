<?php

namespace App\Http\Controllers\Adminpanel\Stay;

use App\Http\Controllers\Controller;
use App\Models\MetaTag;
use App\Models\RoomTypes;
use App\Models\RoomFeatures;
use App\Models\RoomAmenities;
use App\Models\RoomFeaturesData;
use App\Models\RoomAmentiesData;
use Illuminate\Http\Request;
use DataTables;

class RoomTypesController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:roomtypes-list|roomtypes-create|roomtypes-edit|roomtypes-delete', ['only' => ['list']]);
        $this->middleware('permission:roomtypes-create', ['only' => ['store', 'index']]);
        $this->middleware('permission:roomtypes-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:roomtypes-delete', ['only' => ['block']]);
    }


    public function index()
    {
        $features = RoomFeatures::all();
        $amenities = RoomAmenities::all();


        return view('adminpanel.stay.roomtypes.index', compact('features',  'amenities'));
    }

    private function generateMetaTitle($title)
    {
        // Remove special characters and replace spaces with dashes
        return preg_replace('/[^a-z0-9\-]/', '', str_replace(' ', '-', strtolower($title)));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description_en' => 'required|string',
            'home_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);


        // $room->save();



        $pathhome_image = $request->file('home_image') ? $request->file('home_image')->store('public/rooms_images') : null;

        if ($request->hasFile('og_image')) {
            // Get the original name of the uploaded file
            $originalName = $request->file('og_image')->getClientOriginalName();
        
            // Store the file with the original name in the desired directory
            $pathog_image = $request->file('og_image')->storeAs('public/og_image', $originalName);
        
        
        } else {
            $path = "";
        }


        $room = new RoomTypes();
        $room->room_name = $request->room_name;
        $room->title = $request->title;
        $room->description_en = $request->description_en;
        $room->home_image = $pathhome_image;
        $room->home_title = $request->home_title;
        $room->home_content1 = $request->home_content1;
        $room->home_content2 = $request->home_content2;
        $room->checkbox = $request->checkbox ?? 0;
        $room->status = $request->status;

        $room->meta_title = $this->generateMetaTitle($request->room_name);

        $room->save();
        $id = $room->id;

        // dd($room->meta_title);
        $metaTag = new MetaTag();
        $metaTag->page_name = 'room-details';
        $metaTag->page_title = 'Kynrock | Room Detail |' . $room->meta_title;
        $metaTag->room_name = $room->meta_title;
        $metaTag->page_id = $room->id;
        $metaTag->description = $request->description;        
        $metaTag->robots = 'index,follow';
        $metaTag->keywords = $request->keywords;
        $metaTag->og_title = $request->og_title;
        $metaTag->og_type = $request->og_type;
        $metaTag->og_tag = $request->og_tag;
        $metaTag->og_url = $request->og_url;
        $metaTag->og_image = $pathog_image;
        $metaTag->og_sitename = $request->og_sitename;
        $metaTag->og_description = $request->og_description;
        $metaTag->og_email = $request->og_email;
        $metaTag->order = $request->order;
        $metaTag->status = 'Y';
        $metaTag->save();



        $this->saveRoomFeatures($request, $room->id);
        $this->saveRoomAmenities($request, $room->id);


        \LogActivity::addToLog('New Room ' . $request->title . ' added(' . $id . ').');

        return redirect()->route('roomtypes-list')
            ->with('success', 'Room created successfully.');
    }

    public function saveRoomFeatures(Request $request, $roomId)
    {
        RoomFeaturesData::where('room_id', $roomId)->delete();


        $features = $request->input('features', []);
        foreach ($features as $featureId => $checked) {
            if ($checked) {
                // Save each checked feature in the room_feature_data table
                $roomFeatureData = new RoomFeaturesData();
                $roomFeatureData->room_id = $roomId;
                $roomFeatureData->feature_id = $featureId;
                $roomFeatureData->save();
                // dd($roomFeatureData);
            }
        }
    }


    public function saveRoomAmenities(Request $request, $roomId)
    {
        // Clear previous room facilities for the room
        RoomAmentiesData::where('room_id', $roomId)->delete();
//  \DB::enableQueryLog();
        $amenities = $request->input('amenities', []);

        foreach ($amenities as $amenityId => $checked) {
            if ($checked) {
                // Save each checked facility in the room_facility_data table
                $roomAmenitiesData = new RoomAmentiesData();
                $roomAmenitiesData->room_id = $roomId;
                $roomAmenitiesData->amenities_id = $amenityId;
                $roomAmenitiesData->save();
            }
        }
        // dd(\DB::getQueryLog());
    }

   
    

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = RoomTypes::where('is_delete', 0)->get();
            // die(var_dump($data));
            return Datatables::of($data)
                ->addIndexColumn()
                // ->addColumn('room_images', function ($row) {
                //     $imgpath = "storage/app/$row->desktop_image";
                //     $img = '<img src="'.$imgpath.'">';
                //     return $img;
                // })
                ->addColumn('edit', function ($row) {
                    $edit_url = url('/edit-roomtypes/' . encrypt($row->id) . '');
                    $btn = '<a href="' . $edit_url . '"><i class="fa fa-edit"></i></a>';
                    return $btn;
                })
                ->addColumn('activation', function ($row) {
                    if ($row->status == "Y")
                        $status = 'fa fa-check';
                    else
                        $status = 'fa fa-remove';

                    $btn = '<a href="changestatus-roomtypes/' . $row->id . '/' . $row->cEnable . '"><i class="' . $status . '"></i></a>';

                    return $btn;
                })
                ->addColumn('blockroomtype', 'adminpanel.stay.roomtypes.actionsBlock')
                ->rawColumns(['edit', 'activation', 'blockroomtype'])
                ->make(true);
        }

        return view('adminpanel.stay.roomtypes.list');
    }

    public function edit($id)
    {
        $roomID = decrypt($id);
        $data = RoomTypes::find($roomID);
        $features = RoomFeatures::all();
        $amenities = RoomAmenities::all();
        $roomAmenities = RoomAmentiesData::where('room_id', $roomID)->get();
        $roomFeatures = RoomFeaturesData::where('room_id', $roomID)->get();
        // $metaTag = MetaTag::where('room_name', $data->meta_title)->first();
        $metaTag = MetaTag::where('page_id', $data->id)->where('room_name',$data->meta_title)->first();

        // dd($metaTag);

        return view('adminpanel.stay.roomtypes.edit', compact('data', 'features', 'amenities', 'roomAmenities', 'roomFeatures', 'metaTag'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'room_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description_en' => 'required|string',
            'home_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);



        if (!$request->hasFile('home_image') == "") {

            $home_image = $request->file('home_image')->getClientOriginalName();

            $pathhome_image = $request->file('home_image')->store('public/rooms_images');
        }
        if ($request->hasFile('og_image')) {
            // Get the original name of the uploaded file
            $originalName = $request->file('og_image')->getClientOriginalName();
        
            // Store the file with the original name in the desired directory
            $pathog_image = $request->file('og_image')->storeAs('public/og_image', $originalName);
        }
        

        $data =  RoomTypes::find($request->id);
        $data->room_name = $request->room_name;
        $data->title = $request->title;
        $data->description_en = $request->description_en;
        if (!empty($pathhome_image)) {
            $data->home_image = $pathhome_image;
        }
        $data->home_title = $request->home_title;
        $data->home_content1 = $request->home_content1;
        $data->home_content2 = $request->home_content2;
        $data->checkbox = $request->has('checkbox') ? 1 : 0;
        $data->status = $request->status;
        $id = $data->id;

        $data->meta_title = $this->generateMetaTitle($request->room_name);

        $data->save();
        $this->saveRoomFeatures($request, $data->id);
        $this->saveRoomAmenities($request, $data->id);

        $metaTag = MetaTag::where('page_id', $data->id)->first();

        // $metaTag = MetaTag::where('room_name', $data->meta_title)->first();
        if ($metaTag) {
        $metaTag->page_name = 'room-details';
        $metaTag->page_title = 'Kynrock | Room Detail |' . $data->meta_title;
        $metaTag->room_name = $data->meta_title;
        $metaTag->description = $request->description;
        $metaTag->keywords = $request->keywords;
        $metaTag->robots = 'index,follow';
        $metaTag->og_title = $request->og_title;
        $metaTag->og_type = $request->og_type;
        $metaTag->og_tag = $request->og_tag;
        $metaTag->og_url = $request->og_url;
        $metaTag->og_sitename = $request->og_sitename;
        $metaTag->og_description = $request->og_description;
        $metaTag->og_email = $request->og_email;
        $metaTag->order = $request->order;
        $metaTag->status = 'Y';
        if (!empty($pathog_image)) {
            $metaTag->og_image = $pathog_image;
        }
        // dd($metaTag);
        $metaTag->save();
        // dd()

    } else {
        $metaTag = new MetaTag();
        $metaTag->page_name = 'room-details';
        $metaTag->page_title = 'Kynrock | Room Detail |' . $data->meta_title;
        $metaTag->room_name = $data->meta_title;
        $metaTag->page_id = $data->id;
        $metaTag->description = $request->description;
        $metaTag->keywords = $request->keywords;
        $metaTag->robots = 'index,follow';
        $metaTag->og_title = $request->og_title;
        $metaTag->og_type = $request->og_type;
        $metaTag->og_tag = $request->og_tag;
        $metaTag->og_url = $request->og_url;
        $metaTag->og_sitename = $request->og_sitename;
        $metaTag->og_description = $request->og_description;
        $metaTag->og_email = $request->og_email;
        $metaTag->order = $request->order;
        $metaTag->status = 'Y';
        if (!empty($pathog_image)) {
            $metaTag->og_image = $pathog_image;
        } else {
            // If no new og_image is uploaded, retain the old value
            $metaTag->og_image = $metaTag->og_image ?: null;
        }
        // dd($metaTag);
        $metaTag->save();
    }






        \LogActivity::addToLog('Room record ' . $data->title . ' updated(' . $id . ').');

        return redirect()->route('roomtypes-list')
            ->with('success', 'Room updated successfully.');
    }

    public function activation(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  RoomTypes::find($request->id);

        if ($data->status == "Y") {
            $data->status = 'N';
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Room record ' . $data->title . ' deactivated(' . $id . ').');

            return redirect()->route('roomtypes-list')
                ->with('success', 'Room deactivate successfully.');
        } else {

            $data->status = "Y";
            $data->save();
            $id = $data->id;

            \LogActivity::addToLog('Room record ' . $data->title . ' activated(' . $id . ').');

            return redirect()->route('roomtypes-list')
                ->with('success', 'Room activate successfully.');
        }
    }



    public function block(Request $request)
    {
        $request->validate([
            // 'status' => 'required'
        ]);

        $data =  RoomTypes::find($request->id);
        $data->is_delete = 1;
        $data->save();
        $id = $data->id;
        MetaTag::where('room_name', $data->meta_title)->delete();
        
        \LogActivity::addToLog('Room record ' . $data->title . ' deleted(' . $id . ').');

        return redirect()->route('roomtypes-list')
            ->with('success', 'Room deleted successfully.');
    }
}
