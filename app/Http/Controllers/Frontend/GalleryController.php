<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AboutUsBelowContent;
use App\Models\AboutUsContent;
use App\Models\AboutUsDiningContent;
use App\Models\AboutUsWeddingContent;
use App\Models\ContactUsDetail;
use App\Models\GalleryCategory;
use App\Models\GalleryImages;
use App\Models\TopBanner;
use App\Models\WeddingVenues;



class GalleryController extends Controller
{
    public function index()
    {
        $topBanner = TopBanner::where('id', 3)->first();
        $categories = GalleryCategory::with([
            'subCategories' => function ($query) {
                $query->orderBy('order', 'asc');
            },
            'subCategories.images' => function ($query) {
                $query->orderBy('order', 'asc');
            }
        ])
            ->orderBy('id', 'asc')
            ->where('is_delete', 0)
            ->where('status', 'Y')
            ->get();
        $allImages = GalleryImages::orderBy('id', 'asc')->get();
        $contactDetails = ContactUsDetail::first();



        return view('frontend.gallery', compact(
            'topBanner',
            'allImages',
            'categories',
            'contactDetails'



        ));
    }
}
