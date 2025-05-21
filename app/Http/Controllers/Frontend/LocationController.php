<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\LocationList;
use App\Models\TopBanner;
use App\Models\WeddingVenues;



class LocationController extends Controller
{
    public function index()
    {
        $topBanner = TopBanner::where('id', 4)->first();
        $locations = LocationList::where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('order', 'ASC')
            ->with(['images' => function ($query) {
                $query->orderBy('order', 'ASC');
            }])->get();


      

        return view('frontend.location', compact(
            'topBanner',
            'locations'



        ));
    }
}
