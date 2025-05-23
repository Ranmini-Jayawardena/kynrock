<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DiningContent;
use App\Models\FeaturesContent;
use App\Models\HomeFeatures;
use App\Models\LocationContent;
use App\Models\LocationList;
use App\Models\MainSlider;
use App\Models\RoomContent;
use App\Models\RoomTypes;
use App\Models\TestimonialContent;
use App\Models\VenueContent;
use App\Models\WelcomeContent;



class HomeController extends Controller
{
    public function index()
    {
        $sliders = MainSlider::where('status', 'Y')->where('is_delete', 0)->orderBy('order', 'ASC')->get();
        $welcomeContent = WelcomeContent::first();
        $roomContent = RoomContent::first();
        $roomTypes = RoomTypes::with(['roomAmenities.feature' => function ($q) {
            $q->where('status', 'Y')->where('is_delete', 0)->orderBy('order', 'ASC')->limit(5);
        }])
            ->where('status', 'Y')->where('is_delete', 0)->where('checkbox', 1)
            ->get();
        $featureContent = FeaturesContent::first();
        $homeFeatures = HomeFeatures::where('status', 'Y')->where('is_delete', 0)->orderBy('order', 'ASC')->get();
        $diningContent = DiningContent::first();
        $venueContent = VenueContent::first();
        $locationContent = LocationContent::first();
        $locationList = LocationList::where('status', 'Y')
        ->where('is_delete', 0)
        ->orderBy('order', 'ASC')
        ->get();
        $testimonials = TestimonialContent::where('status', 'Y')->where('is_delete', 0)->orderBy('order', 'ASC')->get();
      




        // dd($roomDetails);

        return view('frontend.home', compact(
            'sliders',
            'welcomeContent',
            'roomContent',
            'roomTypes',
            'featureContent',
            'homeFeatures',
            'diningContent',
            'venueContent',
            'locationContent',
            'locationList',
            'testimonials',

        ));
    }
}
