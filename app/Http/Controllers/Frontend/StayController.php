<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\BottomBanner;
use App\Models\RoomTypes;
use App\Models\StayContent;
use App\Models\TopBanner;
use App\Models\WeddingVenues;



class StayController extends Controller
{
    public function index()
    {
        $topBanner = TopBanner::where('id', 6)->first();
        $contents = StayContent::first();
        $roomTypes = RoomTypes::with(['roomAmenities', 'roomFeatures', 'images'])
            ->where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('id', 'desc')
            ->get();
       

       
        




        // dd($roomDetails);

        return view('frontend.stay', compact(
            'topBanner',
            'contents'
            , 'roomTypes'
           
           

        ));
    }

     public function RoomDetail($meta_title)
    {
        $topBanner = TopBanner::where('id', 6)->first();

        $roomDetails = RoomTypes::where('status', 'Y')->where('is_delete', 0)
        ->where('meta_title', $meta_title)
        ->with(['roomAmenities', 'roomFeatures', 'images'])
        ->first();

        $bottomBanner = BottomBanner::where('id',3)->first();


        return view('frontend.room_detail', compact('topBanner', 'roomDetails','bottomBanner'));
    }
}
