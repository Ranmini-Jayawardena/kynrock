<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactUsDetail;
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
        $roomTypes = RoomTypes::where('status', 'Y')
            ->where('is_delete', 0)
            ->orderBy('id', 'asc')
            ->where('checkbox', 1)
            ->with(['roomAmenities.feature'])
            ->get();

        // Sort roomAmenities by feature.order for each RoomType
        foreach ($roomTypes as $roomType) {
            $roomType->roomAmenities = $roomType->roomAmenities
                ->filter(function ($amenity) {
                    return $amenity->feature && $amenity->feature->status === 'Y' && $amenity->feature->is_delete == 0;
                })
                ->sortBy(function ($amenity) {
                    return $amenity->feature->order ?? 0;
                })

                ->take(6)
                ->values(); // reindex
        }
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
        $contactDetails = ContactUsDetail::first();





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
            'contactDetails',

        ));
    }
}
