<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\BottomBanner;
use App\Models\ContactUsDetail;
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
        // $roomTypes = RoomTypes::with(['roomAmenities', 'roomFeatures', 'images'])
        //     ->where('status', 'Y')
        //     ->where('is_delete', 0)
        //     ->orderBy('id', 'asc')
        //     ->get();
     $roomTypes = RoomTypes::where('status', 'Y')
    ->where('is_delete', 0)
    ->orderBy('id', 'asc')
    ->with(['roomAmenities.feature', 'roomFeatures', 'images'])
    ->get();

// Sort roomAmenities by feature.order for each RoomType
foreach ($roomTypes as $roomType) {
    $roomType->roomAmenities = $roomType->roomAmenities->sortBy(function ($amenity) {
        return $amenity->feature->order ?? 0;
    })->values();
}

        $contactDetails = ContactUsDetail::first();
       
        




        // dd($roomDetails);

        return view('frontend.stay', compact(
            'topBanner',
            'contents'
            , 'roomTypes',
            'contactDetails'

           
           

        ));
    }

     public function RoomDetail($meta_title)
    {
        $topBanner = TopBanner::where('id', 6)->first();

      $roomDetails = RoomTypes::where('status', 'Y')
    ->where('is_delete', 0)
    ->where('meta_title', $meta_title)
    ->with(['roomAmenities.feature', 'roomFeatures', 'images']) // load all needed relationships
    ->first();

// Sort by the related `feature.order`
$roomDetails->roomAmenities = $roomDetails->roomAmenities->sortBy(function ($amenity) {
    return $amenity->feature->order ?? 0;
})->values();



        $bottomBanner = BottomBanner::where('id',3)->first();
        $contactDetails = ContactUsDetail::first();


        return view('frontend.room_detail', compact('topBanner', 'roomDetails','bottomBanner','contactDetails'));
    }
}
