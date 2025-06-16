<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\ContactUsDetail;
use App\Models\ExperienceContent;
use App\Models\ExperienceList;
use App\Models\TopBanner;
use App\Models\WeddingVenues;



class ExperienceController extends Controller
{
    public function index()
    {
        $topBanner = TopBanner::where('id', 7)->first();
        $experienceContent = ExperienceContent::first();
        $experiences = ExperienceList::where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('id', 'ASC')
            ->with(['images' => function ($query) {
                $query->orderBy('order', 'ASC');
        }])->get();
       $contactDetails = ContactUsDetail::first();
        




        // dd($roomDetails);

        return view('frontend.experience', compact(
            'topBanner',
            'experiences',
            'experienceContent',
            'contactDetails'
        
       
           

        ));
    }
}
