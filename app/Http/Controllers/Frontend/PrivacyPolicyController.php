<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\ContactUsDetail;
use App\Models\PrivacyPolicy;
use App\Models\TermsAndConditions;
use App\Models\TopBanner;
use App\Models\WeddingVenues;



class PrivacyPolicyController extends Controller
{
    public function index()
    {
       
       $topBanner = TopBanner::where('id', 9)->first();
        $contactDetails = ContactUsDetail::first();
        $privacyPolicy = PrivacyPolicy:: where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('order', 'asc')
            ->get();    




        // dd($roomDetails);

        return view('frontend.privacy_policy', compact(
            'topBanner',
            'contactDetails',
            'privacyPolicy'
           

        ));
    }
}
