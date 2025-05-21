<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\BottomBanner;
use App\Models\GalleryCategory;
use App\Models\GalleryImages;
use App\Models\LocationList;
use App\Models\TopBanner;
use App\Models\WeddingComplementaryServices;
use App\Models\WeddingContent;
use App\Models\WeddingDiningFeatures;
use App\Models\WeddingFeatures;
use App\Models\WeddingHotelFeatures;
use App\Models\WeddingPackages;
use App\Models\WeddingVenues;



class WeddingController extends Controller
{
    public function index()
    {
        $topBanner = TopBanner::where('id', 5)->first();
        $weddingContent = WeddingContent::first();
        $hotelFeatures = WeddingHotelFeatures::where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('order', 'ASC')
            ->get();
        $weddingVenues = WeddingVenues::with(['subCategory.images'])
        ->orderBy('order','asc')
        ->where('status', 'Y')
        ->where('is_delete', 0)
        ->get();
        $weddingPackages = WeddingPackages::where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('order', 'ASC')
            ->get();
        $diningFeatures = WeddingDiningFeatures::where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('order', 'ASC')
            ->get();
        $services = WeddingComplementaryServices::where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('order', 'ASC')
            ->get();
        $weddingHotelFeatures = WeddingFeatures::where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('order', 'ASC')
            ->get();
        $bottomBanner = BottomBanner::where('id', 2)->first();


       




        return view('frontend.wedding', compact(
            'topBanner',
            'weddingContent',
            'hotelFeatures',
             'weddingVenues',
            'weddingPackages'
            ,'diningFeatures'
            ,'services'
            ,'weddingHotelFeatures'
            ,'bottomBanner'
            



        ));
    }
}
