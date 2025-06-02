<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\ContactUsDetail;
use App\Models\TermsAndConditions;
use App\Models\TopBanner;
use App\Models\WeddingVenues;



class TermsAndConditionsController extends Controller
{
    public function index()
    {
       
       $topBanner = TopBanner::where('id', 9)->first();
        $contactDetails = ContactUsDetail::first();
        $termsAndConditions = TermsAndConditions:: where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('order', 'asc')
            ->get();    




        // dd($roomDetails);

        return view('frontend.terms_and_condition', compact(
            'topBanner',
            'contactDetails',
            'termsAndConditions'
           

        ));
    }
}
