<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\DiningContent;
use App\Models\FeaturesContent;
use App\Models\HomeFeatures;
use App\Models\MainSlider;
use App\Models\RoomAmenities;
use App\Models\RoomAmentiesData;
use App\Models\RoomContent;
use App\Models\RoomTypes;
use App\Models\WelcomeContent;
use Carbon\Carbon;



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




        // dd($roomDetails);

        return view('frontend.home', compact(
            'sliders',
            'welcomeContent',
            'roomContent',
            'roomTypes',
            'featureContent',
            'homeFeatures',
            'diningContent',
            // 'roomAmenities',

        ));
    }
}
