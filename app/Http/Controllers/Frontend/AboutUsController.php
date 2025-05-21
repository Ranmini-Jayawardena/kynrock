<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\TopBanner;
use App\Models\WeddingVenues;



class AboutUsController extends Controller
{
    public function index()
    {
        $topBanner = TopBanner::where('id', 2)->first();
        $aboutUsContent = AboutUsContent::first();
        $diningContent = AboutUsDiningContent::first();
        $weddingContent = AboutUsWeddingContent::first();
        $weddingVenues = WeddingVenues::with(['subCategory.images'])
        ->orderBy('order','asc')
        ->where('status', 'Y')
        ->where('is_delete', 0)
        ->get();
        $belowContent = AboutUsBelowContent::first();
        




        // dd($roomDetails);

        return view('frontend.about_us', compact(
            'topBanner',
            'aboutUsContent',
            'diningContent',
            'weddingContent',
            'weddingVenues',
            'belowContent'
           

        ));
    }
}
