<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsContent;
use App\Models\DiningContent;
use App\Models\FeaturesContent;
use App\Models\HomeFeatures;
use App\Models\LocationContent;
use App\Models\LocationList;
use App\Models\MainSlider;
use App\Models\RoomContent;
use App\Models\RoomTypes;
use App\Models\TestimonialContent;
use App\Models\TopBanner;
use App\Models\VenueContent;
use App\Models\WelcomeContent;
use Carbon\Carbon;



class AboutUsController extends Controller
{
    public function index()
    {
        $topBanner = TopBanner::where('id', 2)->first();
        $aboutUsContent = AboutUsContent::first();




        // dd($roomDetails);

        return view('frontend.about_us', compact(
            'topBanner',
            'aboutUsContent'
           

        ));
    }
}
