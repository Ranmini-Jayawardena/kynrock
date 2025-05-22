<?php

use App\Http\Controllers\Adminpanel\AboutUs\AboutUsBelowContentController;
use App\Http\Controllers\Adminpanel\AboutUs\AboutUsContentController;
use App\Http\Controllers\Adminpanel\BankGuaranteeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Adminpanel\UserController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\VerifyEmailController;
use App\Http\Controllers\Auth\RegisteredUserController;
// use App\Http\Controllers\Adminpanel\SeafarerController;
// use App\Http\Controllers\Adminpanel\VesselListController;
use App\Http\Controllers\Adminpanel\LogActivityController;
// use App\Http\Controllers\Adminpanel\OnboardListController;
// use App\Http\Controllers\Adminpanel\RequestFormController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
// use App\Http\Controllers\Adminpanel\ClientManagmentController;
// use App\Http\Controllers\Adminpanel\OnboardCheckListController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
// use App\Http\Controllers\Adminpanel\Masterdata\CountryController;
// use App\Http\Controllers\Adminpanel\Masterdata\PostionController;
// use App\Http\Controllers\Adminpanel\Masterdata\LocationController;
// use App\Http\Controllers\Adminpanel\ClientHistoricalDataController;
// use App\Http\Controllers\Adminpanel\InvoiceController;
// use App\Http\Controllers\Adminpanel\Masterdata\PostionChangeStatus;
// use App\Http\Controllers\Adminpanel\Masterdata\DocumentTypeController;
// use App\Http\Controllers\Adminpanel\Masterdata\PostionGetAjaxPosition;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
// use App\Http\Controllers\Adminpanel\Masterdata\ExperienceLevelController;
// use App\Http\Controllers\Adminpanel\Masterdata\QualificationController;
// use App\Http\Controllers\Adminpanel\Masterdata\VesselTypeController;
use App\Http\Controllers\Adminpanel\ReportController;
use App\Http\Controllers\Adminpanel\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Adminpanel\Home\MainSliderController;
use App\Http\Controllers\Adminpanel\AboutUs\AboutUsController;
use App\Http\Controllers\Adminpanel\AboutUs\AboutUsDiningContentController;
use App\Http\Controllers\Adminpanel\AboutUs\AboutUsFeaturesController;
use App\Http\Controllers\Adminpanel\AboutUs\AboutUsWeddingContentController;
use App\Http\Controllers\Adminpanel\AboutUs\WeddingContentController;
use App\Http\Controllers\Adminpanel\Banners\BottomBannersController;
use App\Http\Controllers\Adminpanel\Banners\TopBannersController;
use App\Http\Controllers\Adminpanel\ContactUs\ContactUsController;
use App\Http\Controllers\Adminpanel\ContactUs\EnquiryController;
use App\Http\Controllers\Adminpanel\Gallery\GalleryCategoryController;
use App\Http\Controllers\Adminpanel\Experience\ExperienceController;
use App\Http\Controllers\Adminpanel\Gallery\ImageController;
use App\Http\Controllers\Adminpanel\Gallery\VideoController;
use App\Http\Controllers\Adminpanel\Stay\ContentController;
use App\Http\Controllers\Adminpanel\Stay\RoomTypesController;
use App\Http\Controllers\Adminpanel\Stay\RoomTypesImagesController;
use App\Http\Controllers\Adminpanel\Dining\MonthlyEventController;
use App\Http\Controllers\Adminpanel\Wedding\VenueDetailsController;
use App\Http\Controllers\Adminpanel\Events\EventsController;
use App\Http\Controllers\Adminpanel\Experience\ExperienceContentContoller;
use App\Http\Controllers\Adminpanel\Experience\ExperienceContentController;
use App\Http\Controllers\Adminpanel\Home\DiningContentController;
use App\Http\Controllers\Adminpanel\Home\FeaturesContentController;
use App\Http\Controllers\Adminpanel\Home\HomeFeaturesController;
use App\Http\Controllers\Adminpanel\Home\LocationContentController;
use App\Http\Controllers\Adminpanel\Home\RoomContentController;
use App\Http\Controllers\Adminpanel\Home\TestimonialContentController;
use App\Http\Controllers\Adminpanel\Home\VenueContentContoller;
use App\Http\Controllers\Adminpanel\Home\WelcomeContentController;
use App\Http\Controllers\Adminpanel\location\LocationController;
use App\Http\Controllers\Adminpanel\TermsAndConditions\TermsAndConditionsController;
use App\Http\Controllers\Adminpanel\PrivacyPolicy\PrivacyPolicyController;
use App\Http\Controllers\Adminpanel\MetaTagController;
use App\Http\Controllers\Adminpanel\Stay\RoomAmenitiesController;
use App\Http\Controllers\Adminpanel\Stay\RoomFeaturesController as StayRoomFeaturesController;
use App\Http\Controllers\Adminpanel\Wedding\RoomFeaturesController;
use App\Http\Controllers\Adminpanel\Wedding\WeddingComplementaryServicesController;
use App\Http\Controllers\Adminpanel\Wedding\WeddingContentController as WeddingWeddingContentController;
use App\Http\Controllers\Adminpanel\Wedding\WeddingDiningFeaturesController;
use App\Http\Controllers\Adminpanel\Wedding\WeddingFeaturesController;
use App\Http\Controllers\Adminpanel\Wedding\WeddingHotelFeaturesController;
use App\Http\Controllers\Adminpanel\Wedding\WeddingPackagesController;
use App\Http\Controllers\Adminpanel\Wedding\WeddingVenueController;

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::get('/forgot-password', [PasswordResetLinkController::class, 'create'])
    ->middleware('guest')
    ->name('password.request');

Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])
    ->middleware('guest')
    ->name('password.email');

Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])
    ->middleware('guest')
    ->name('password.reset');

Route::post('/reset-password', [NewPasswordController::class, 'store'])
    ->middleware('guest')
    ->name('password.update');

Route::get('/verify-email', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('/verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
    ->middleware(['auth', 'signed', 'throttle:6,1'])
    ->name('verification.verify');

Route::post('/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware(['auth', 'throttle:6,1'])
    ->name('verification.send');

Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])
    ->middleware('auth')
    ->name('password.confirm');

Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store'])
    ->middleware('auth');

Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::put('update-role', [RoleController::class, 'update'])->name('update-role');
    Route::resource('users', UserController::class);
    Route::get('users-list',[UserController::class,'list'])->name('users-list');
    Route::put('save-user', [UserController::class, 'update'])->name('save-user');
    Route::get('changestatus-user/{id}', [UserController::class, 'activation'])->name('changestatus-user');
    Route::get('blockuser/{id}', [UserController::class, 'block'])->name('blockuser');
    Route::post('checkEmailAvailability', [UserController::class, 'checkEmailAvailability'])->name('checkEmailAvailability');
    Route::post('checkNICAvailability', [UserController::class, 'checkNICAvailability'])->name('checkNICAvailability');

    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::view('profile', 'profile')->name('profile');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::get('log-activity-list',[LogActivityController::class,'list'])->name('log-activity-list');

    //main-slider
    Route::get('main-slider', [MainSliderController::class, 'index'])->name('main-slider');
    Route::post('new-main-slider', [MainSliderController::class, 'store'])->name('new-main-slider');
    Route::get('main-slider-list', [MainSliderController::class, 'list'])->name('main-slider-list');
    Route::get('/edit-main-slider/{id}', [MainSliderController::class, 'edit'])->name('edit-main-slider');
    Route::put('save-main-slider', [MainSliderController::class, 'update'])->name('save-main-slider');
    Route::get('changestatus-main-slider/{id}', [MainSliderController::class, 'activation'])->name('changestatus-main-slider');
    Route::get('blockmainslider/{id}', [MainSliderController::class, 'block'])->name('blockmainslider');

    //home-welcome-content
    Route::get('welcome-content-edit', [WelcomeContentController::class, 'index'])->name('welcome-content-edit');
    Route::put('save-welcome-content', [WelcomeContentController::class, 'update'])->name('save-welcome-content');

    //home-room-content
    Route::get('room-content-edit', [RoomContentController::class, 'index'])->name('room-content-edit');
    Route::put('save-room-content', [RoomContentController::class, 'update'])->name('save-room-content');

    //home-features-content
    Route::get('features-content-edit', [FeaturesContentController::class, 'index'])->name('features-content-edit');
    Route::put('save-features-content', [FeaturesContentController::class, 'update'])->name('save-features-content');
 
    //home-features
    Route::get('home-features', [HomeFeaturesController::class, 'index'])->name('home-features');
    Route::post('new-home-features', [HomeFeaturesController::class, 'store'])->name('new-home-features');
    Route::get('home-features-list', [HomeFeaturesController::class, 'list'])->name('home-features-list');
    Route::get('/edit-home-features/{id}', [HomeFeaturesController::class, 'edit'])->name('edit-home-features');
    Route::put('save-home-features', [HomeFeaturesController::class, 'update'])->name('save-home-features');
    Route::get('changestatus-home-features/{id}', [HomeFeaturesController::class, 'activation'])->name('changestatus-home-features');
    Route::get('blockfeatures/{id}', [HomeFeaturesController::class, 'block'])->name('blockfeatures');

    //dining-content
    Route::get('dining-content-edit', [DiningContentController::class, 'index'])->name('dining-content-edit');
    Route::put('save-dining-content', [DiningContentController::class, 'update'])->name('save-dining-content');

    //venue-content
    Route::get('venue-content-edit', [VenueContentContoller::class, 'index'])->name('venue-content-edit');
    Route::put('save-venue-content', [VenueContentContoller::class, 'update'])->name('save-venue-content');

    Route::get('location-content-edit', [LocationContentController::class, 'index'])->name('location-content-edit');
    Route::put('save-location-content', [LocationContentController::class, 'update'])->name('save-location-content');

    //testimonial-content
    Route::get('testimonial-content', [TestimonialContentController::class, 'index'])->name('testimonial-content');
    Route::post('new-testimonial-content', [TestimonialContentController::class, 'store'])->name('new-testimonial-content');
    Route::get('testimonial-content-list', [TestimonialContentController::class, 'list'])->name('testimonial-content-list');
    Route::get('/edit-testimonial-content/{id}', [TestimonialContentController::class, 'edit'])->name('edit-testimonial-content');
    Route::put('save-testimonial-content', [TestimonialContentController::class, 'update'])->name('save-testimonial-content');
    Route::get('changestatus-testimonial-content/{id}', [TestimonialContentController::class, 'activation'])->name('changestatus-testimonial-content');
    Route::get('blocktestimonial/{id}', [TestimonialContentController::class, 'block'])->name('blocktestimonial');


    //about-us
    Route::get('about-us-content-edit', [AboutUsContentController::class, 'index'])->name('about-us-content-edit');
    Route::put('save-about-us-content', [AboutUsContentController::class, 'update'])->name('save-about-us-content');

    //about-us-features
    Route::get('about-us-features', [AboutUsFeaturesController::class, 'index'])->name('about-us-features');
    Route::post('new-about-us-features', [AboutUsFeaturesController::class, 'store'])->name('new-about-us-features');
    Route::get('about-us-features-list', [AboutUsFeaturesController::class, 'list'])->name('about-us-features-list');
    Route::get('/edit-about-us-features/{id}', [AboutUsFeaturesController::class, 'edit'])->name('edit-about-us-features');
    Route::put('save-about-us-features', [AboutUsFeaturesController::class, 'update'])->name('save-about-us-features');
    Route::get('changestatus-about-us-features/{id}', [AboutUsFeaturesController::class, 'activation'])->name('changestatus-about-us-features');
    Route::get('blockfeatures/{id}', [AboutUsFeaturesController::class, 'block'])->name('blockfeatures');

    //about-us-dining-content
     Route::get('about-us-dining-content-edit', [AboutUsDiningContentController::class, 'index'])->name('about-us-dining-content-edit');
     Route::put('save-about-us-dining-content', [AboutUsDiningContentController::class, 'update'])->name('save-about-us-dining-content');

    //about-us-wedding-content
    Route::get('about-us-wedding-content-edit', [AboutUsWeddingContentController::class, 'index'])->name('about-us-wedding-content-edit');
    Route::put('save-about-us-wedding-content', [AboutUsWeddingContentController::class, 'update'])->name('save-about-us-wedding-content');

    //about-us-wedding-content
    Route::get('about-us-below-content-edit', [AboutUsBelowContentController::class, 'index'])->name('about-us-below-content-edit');
    Route::put('save-about-us-below-content', [AboutUsBelowContentController::class, 'update'])->name('save-about-us-below-content');

     //wedding-content
     Route::get('wedding-content-edit', [WeddingWeddingContentController::class, 'index'])->name('wedding-content-edit');
     Route::put('save-wedding-content', [WeddingWeddingContentController::class, 'update'])->name('save-wedding-content');

    //wedding-venue
     Route::get('wedding-venue', [WeddingVenueController::class, 'index'])->name('wedding-venue');
     Route::post('new-wedding-venue', [WeddingVenueController::class, 'store'])->name('new-wedding-venue');
     Route::get('wedding-venue-list', [WeddingVenueController::class, 'list'])->name('wedding-venue-list');
     Route::get('/edit-wedding-venue/{id}', [WeddingVenueController::class, 'edit'])->name('edit-wedding-venue');
     Route::put('save-wedding-venue', [WeddingVenueController::class, 'update'])->name('save-wedding-venue');
     Route::get('changestatus-wedding-venue/{id}', [WeddingVenueController::class, 'activation'])->name('changestatus-wedding-venue');
     Route::get('blockfeatures/{id}', [WeddingVenueController::class, 'block'])->name('blockfeatures');

     
    //wedding-hotel-features
    Route::get('wedding-hotel-features', [WeddingHotelFeaturesController::class, 'index'])->name('wedding-hotel-features');
    Route::post('new-wedding-hotel-features', [WeddingHotelFeaturesController::class, 'store'])->name('new-wedding-hotel-features');
    Route::get('wedding-hotel-features-list', [WeddingHotelFeaturesController::class, 'list'])->name('wedding-hotel-features-list');
    Route::get('/edit-wedding-hotel-features/{id}', [WeddingHotelFeaturesController::class, 'edit'])->name('edit-wedding-hotel-features');
    Route::put('save-wedding-hotel-features', [WeddingHotelFeaturesController::class, 'update'])->name('save-wedding-hotel-features');
    Route::get('changestatus-wedding-hotel-features/{id}', [WeddingHotelFeaturesController::class, 'activation'])->name('changestatus-wedding-hotel-features');
    Route::get('blockfeatures/{id}', [WeddingHotelFeaturesController::class, 'block'])->name('blockfeatures');

    //wedding-packages
    Route::get('wedding-package', [WeddingPackagesController::class, 'index'])->name('wedding-package');
    Route::post('new-wedding-package', [WeddingPackagesController::class, 'store'])->name('new-wedding-package');
    Route::get('wedding-package-list', [WeddingPackagesController::class, 'list'])->name('wedding-package-list');
    Route::get('/edit-wedding-package/{id}', [WeddingPackagesController::class, 'edit'])->name('edit-wedding-package');
    Route::put('save-wedding-package', [WeddingPackagesController::class, 'update'])->name('save-wedding-package');
    Route::get('changestatus-wedding-package/{id}', [WeddingPackagesController::class, 'activation'])->name('changestatus-wedding-package');
    Route::get('blockpackages/{id}', [WeddingPackagesController::class, 'block'])->name('blockpackages');

    //wedding-dining-features
    Route::get('wedding-dining-features', [WeddingDiningFeaturesController::class, 'index'])->name('wedding-dining-features');
    Route::post('new-wedding-dining-features', [WeddingDiningFeaturesController::class, 'store'])->name('new-wedding-dining-features');
    Route::get('wedding-dining-features-list', [WeddingDiningFeaturesController::class, 'list'])->name('wedding-dining-features-list');
    Route::get('/edit-wedding-dining-features/{id}', [WeddingDiningFeaturesController::class, 'edit'])->name('edit-wedding-dining-features');
    Route::put('save-wedding-dining-features', [WeddingDiningFeaturesController::class, 'update'])->name('save-wedding-dining-features');
    Route::get('changestatus-wedding-dining-features/{id}', [WeddingDiningFeaturesController::class, 'activation'])->name('changestatus-wedding-dining-features');
    Route::get('blockfeatures/{id}', [WeddingDiningFeaturesController::class, 'block'])->name('blockfeatures');

     //wedding-complementary-services
    Route::get('wedding-complementary-services', [WeddingComplementaryServicesController::class, 'index'])->name('wedding-complementary-services');
    Route::post('new-wedding-complementary-services', [WeddingComplementaryServicesController::class, 'store'])->name('new-wedding-complementary-services');
    Route::get('wedding-complementary-services-list', [WeddingComplementaryServicesController::class, 'list'])->name('wedding-complementary-services-list');
    Route::get('/edit-wedding-complementary-services/{id}', [WeddingComplementaryServicesController::class, 'edit'])->name('edit-wedding-complementary-services');
    Route::put('save-wedding-complementary-services', [WeddingComplementaryServicesController::class, 'update'])->name('save-wedding-complementary-services');
    Route::get('changestatus-wedding-complementary-services/{id}', [WeddingComplementaryServicesController::class, 'activation'])->name('changestatus-wedding-complementary-services');
    Route::get('blockfeatures/{id}', [WeddingComplementaryServicesController::class, 'block'])->name('blockfeatures');
  
     //wedding-features
    Route::get('wedding-features', [WeddingFeaturesController::class, 'index'])->name('wedding-features');
    Route::post('new-wedding-features', [WeddingFeaturesController::class, 'store'])->name('new-wedding-features');
    Route::get('wedding-features-list', [WeddingFeaturesController::class, 'list'])->name('wedding-features-list');
    Route::get('/edit-wedding-features/{id}', [WeddingFeaturesController::class, 'edit'])->name('edit-wedding-features');
    Route::put('save-wedding-features', [WeddingFeaturesController::class, 'update'])->name('save-wedding-features');
    Route::get('changestatus-wedding-features/{id}', [WeddingFeaturesController::class, 'activation'])->name('changestatus-wedding-features');
    Route::get('blockfeatures/{id}', [WeddingFeaturesController::class, 'block'])->name('blockfeatures');

     //experience
     Route::get('experiences', [ExperienceController::class, 'index'])->name('experiences');
     Route::post('new-experience', [ExperienceController::class, 'store'])->name('new-experience');
     Route::get('experience-list', [ExperienceController::class, 'list'])->name('experience-list');
     Route::get('/edit-experience/{id}', [ExperienceController::class, 'edit'])->name('edit-experience');
     Route::put('save-experience', [ExperienceController::class, 'update'])->name('save-experience');
     Route::get('changestatus-experience/{id}', [ExperienceController::class, 'activation'])->name('changestatus-experience');
     Route::get('blockexperience/{id}', [ExperienceController::class, 'block'])->name('blockexperience');
 
     //experience-content
     Route::get('experience-content-edit', [ExperienceContentController::class, 'index'])->name('experience-content-edit');
     Route::put('save-experience-content', [ExperienceContentController::class, 'update'])->name('save-experience-content'); 

     //locations
     Route::get('locations', [LocationController::class, 'index'])->name('locations');
     Route::post('new-location', [LocationController::class, 'store'])->name('new-location');
     Route::get('location-list', [LocationController::class, 'list'])->name('location-list');
     Route::get('/edit-location/{id}', [LocationController::class, 'edit'])->name('edit-location');
     Route::put('save-location', [LocationController::class, 'update'])->name('save-location');
     Route::get('changestatus-location/{id}', [LocationController::class, 'activation'])->name('changestatus-location');
     Route::get('blocklocation/{id}', [LocationController::class, 'block'])->name('blocklocation');
   
    //room-features
    Route::get('room-features', [StayRoomFeaturesController::class, 'index'])->name('room-features');
    Route::post('new-room-features', [StayRoomFeaturesController::class, 'store'])->name('new-room-features');
    Route::get('room-features-list', [StayRoomFeaturesController::class, 'list'])->name('room-features-list');
    Route::get('/edit-room-features/{id}', [StayRoomFeaturesController::class, 'edit'])->name('edit-room-features');
    Route::put('save-room-features', [StayRoomFeaturesController::class, 'update'])->name('save-room-features');
    Route::get('changestatus-room-features/{id}', [StayRoomFeaturesController::class, 'activation'])->name('changestatus-room-features');
    Route::get('blockfeatures/{id}', [StayRoomFeaturesController::class, 'block'])->name('blockfeatures');
 
    //stay
    Route::get('stay-content-edit', [ContentController::class, 'index'])->name('stay-content-edit');
    Route::put('save-stay-content', [ContentController::class, 'update'])->name('save-stay-content');

    //room-amenities
    Route::get('room-amenities', [RoomAmenitiesController::class, 'index'])->name('room-amenities');
    Route::post('new-room-amenities', [RoomAmenitiesController::class, 'store'])->name('new-room-amenities');
    Route::get('room-amenities-list', [RoomAmenitiesController::class, 'list'])->name('room-amenities-list');
    Route::get('/edit-room-amenities/{id}', [RoomAmenitiesController::class, 'edit'])->name('edit-room-amenities');
    Route::put('save-room-amenities', [RoomAmenitiesController::class, 'update'])->name('save-room-amenities');
    Route::get('changestatus-room-amenities/{id}', [RoomAmenitiesController::class, 'activation'])->name('changestatus-room-amenities');
    Route::get('blockfeatures/{id}', [RoomAmenitiesController::class, 'block'])->name('blockfeatures');

    //stay-roomtypes
    Route::get('roomtypes', [RoomTypesController::class, 'index'])->name('roomtypes');
    Route::post('new-roomtypes', [RoomTypesController::class, 'store'])->name('new-roomtypes');
    Route::get('roomtypes-list', [RoomTypesController::class, 'list'])->name('roomtypes-list');
    Route::get('/edit-roomtypes/{id}', [RoomTypesController::class, 'edit'])->name('edit-roomtypes');
    Route::put('save-roomtypes', [RoomTypesController::class, 'update'])->name('save-roomtypes');
    Route::get('changestatus-roomtypes/{id}', [RoomTypesController::class, 'activation'])->name('changestatus-roomtypes');
    Route::get('blockroomtype/{id}', [RoomTypesController::class, 'block'])->name('blockroomtype');

    //stay-roomtypesimages
    Route::get('roomtypeimages', [RoomTypesImagesController::class, 'index'])->name('roomtypeimages');
    Route::post('new-roomtypeimages', [RoomTypesImagesController::class, 'store'])->name('new-roomtypeimages');
    Route::get('roomtypeimages-list', [RoomTypesImagesController::class, 'list'])->name('roomtypeimages-list');
    Route::put('save-roomtypeimages', [RoomTypesImagesController::class, 'update'])->name('save-roomtypeimages');
    Route::get('blockroomtypeimages/{id}', [RoomTypesImagesController::class, 'block'])->name('blockroomtypeimages');

    //top-banners
    Route::get('top-banner-list', [TopBannersController::class, 'list'])->name('top-banner-list');
    Route::get('/edit-top-banner/{id}', [TopBannersController::class, 'edit'])->name('edit-top-banner');
    Route::get('changestatus-top-banner/{id}', [TopBannersController::class, 'activation'])->name('changestatus-top-banner');
    Route::put('save-top-banner', [TopBannersController::class, 'update'])->name('save-top-banner');

    //bottom-banners
    Route::get('bottom-banner-list', [BottomBannersController::class, 'list'])->name('bottom-banner-list');
    Route::get('/edit-bottom-banner/{id}', [BottomBannersController::class, 'edit'])->name('edit-bottom-banner');
    Route::get('changestatus-bottom-banner/{id}', [BottomBannersController::class, 'activation'])->name('changestatus-bottom-banner');
    Route::put('save-bottom-banner', [BottomBannersController::class, 'update'])->name('save-bottom-banner');

    //contact-us
    Route::get('contact-us-edit', [ContactUsController::class, 'index'])->name('contact-us-edit');
    Route::put('save-contact-us', [ContactUsController::class, 'update'])->name('save-contact-us');
    
    //enquiry
    Route::get('enquiry-list', [EnquiryController::class, 'index'])->name('enquiry-list');
    Route::get('enquiry-view/{id}', [EnquiryController::class, 'view'])->name('enquiry-view');

    //gallery
    Route::get('gallery-category', [GalleryCategoryController::class, 'index'])->name('gallery-category');
    Route::post('new-gallery', [GalleryCategoryController::class, 'store'])->name('new-gallery');
    Route::get('gallery-list', [GalleryCategoryController::class, 'list'])->name('gallery-list');
    Route::get('/edit-gallery/{id}', [GalleryCategoryController::class, 'edit'])->name('edit-gallery');
    Route::put('save-gallery', [GalleryCategoryController::class, 'update'])->name('save-gallery');
    Route::get('changestatus-gallery/{id}', [GalleryCategoryController::class, 'activation'])->name('changestatus-gallery');
    Route::get('blockgallery/{id}', [GalleryCategoryController::class, 'block'])->name('blockgallery');

    //gallery-images
    Route::get('images', [ImageController::class, 'index'])->name('images');
    Route::post('new-images', [ImageController::class, 'store'])->name('new-images');
    Route::get('images-list', [ImageController::class, 'list'])->name('images-list');
    Route::put('/save-images/{id}', [ImageController::class, 'update'])->name('save-images');
     Route::get('/edit-images/{id}', [ImageController::class, 'edit'])->name('edit-images');
    Route::get('get-subcategories', [ImageController::class, 'fetchSubcategories'])->name('get-subcategories');
    Route::get('check-category-subcategory-combination', [ImageController::class, 'checkCategorySubcategoryCombination'])->name('check-category-subcategory-combination');
    Route::post('/blockimages', [ImageController::class, 'block'])->name('block-images');


    //gallery-videos
    Route::get('video', [VideoController::class, 'index'])->name('video');
    Route::post('new-video', [VideoController::class, 'store'])->name('new-video');
    Route::get('video-list', [VideoController::class, 'list'])->name('video-list');
    Route::get('/edit-video/{id}', [VideoController::class, 'edit'])->name('edit-video');
    Route::put('save-video', [VideoController::class, 'update'])->name('save-video');
    Route::get('blockvideo/{id}', [VideoController::class, 'block'])->name('blockvideo');
    
   
    //Dining
    Route::get('monthlyevent', [MonthlyEventController::class, 'index'])->name('monthlyevent');
    Route::post('new-monthlyevent', [MonthlyEventController::class, 'store'])->name('new-monthlyevent');
    Route::get('monthlyevent-list', [MonthlyEventController::class, 'list'])->name('monthlyevent-list');
    Route::get('/edit-monthlyevent/{id}', [MonthlyEventController::class, 'edit'])->name('edit-monthlyevent');
    Route::put('save-monthlyevent', [MonthlyEventController::class, 'update'])->name('save-monthlyevent');
    Route::get('changestatus-monthlyevent/{id}', [MonthlyEventController::class, 'activation'])->name('changestatus-monthlyevent');
    Route::get('blockmonthlyevent/{id}', [MonthlyEventController::class, 'block'])->name('blockmonthlyevent');

    //Wedding 
    Route::get('venue', [VenueDetailsController::class, 'index'])->name('venue');
    Route::post('new-venue', [VenueDetailsController::class, 'store'])->name('new-venue');
    Route::get('venue-list', [VenueDetailsController::class, 'list'])->name('venue-list');
    Route::get('/edit-venue/{id}', [VenueDetailsController::class, 'edit'])->name('edit-venue');
    Route::put('save-venue', [VenueDetailsController::class, 'update'])->name('save-venue');
    Route::get('changestatus-venue/{id}', [VenueDetailsController::class, 'activation'])->name('changestatus-venue');
    Route::get('blockvenue/{id}', [VenueDetailsController::class, 'block'])->name('blockvenue');

    //event
    Route::get('event', [EventsController::class, 'index'])->name('event');
    Route::post('new-event', [EventsController::class, 'store'])->name('new-event');
    Route::get('event-list', [EventsController::class, 'list'])->name('event-list');
    Route::get('/edit-event/{id}', [EventsController::class, 'edit'])->name('edit-event');
    Route::put('save-event', [EventsController::class, 'update'])->name('save-event');
    Route::get('changestatus-event/{id}', [EventsController::class, 'activation'])->name('changestatus-event');
    Route::get('blockevent/{id}', [EventsController::class, 'block'])->name('blockevent');

    //Terms and Conditions
    Route::get('terms', [TermsAndConditionsController::class, 'index'])->name('terms');
    Route::post('new-terms', [TermsAndConditionsController::class, 'store'])->name('new-terms');
    Route::get('terms-list', [TermsAndConditionsController::class, 'list'])->name('terms-list');
    Route::get('/edit-terms/{id}', [TermsAndConditionsController::class, 'edit'])->name('edit-terms');
    Route::put('save-terms', [TermsAndConditionsController::class, 'update'])->name('save-terms');
    Route::get('changestatus-terms/{id}', [TermsAndConditionsController::class, 'activation'])->name('changestatus-terms');
    Route::get('blockterms/{id}', [TermsAndConditionsController::class, 'block'])->name('blockterms');

    Route::get('policy', [PrivacyPolicyController::class, 'index'])->name('policy');
    Route::post('new-policy', [PrivacyPolicyController::class, 'store'])->name('new-policy');
    Route::get('policy-list', [PrivacyPolicyController::class, 'list'])->name('policy-list');
    Route::get('/edit-policy/{id}', [PrivacyPolicyController::class, 'edit'])->name('edit-policy');
    Route::put('save-policy', [PrivacyPolicyController::class, 'update'])->name('save-policy');
    Route::get('changestatus-policy/{id}', [PrivacyPolicyController::class, 'activation'])->name('changestatus-policy');
    Route::get('blockpolicy/{id}', [PrivacyPolicyController::class, 'block'])->name('blockpolicy');

    Route::get('meta-tag-list', [MetaTagController::class, 'list'])->name('meta-tag-list');
    Route::get('edit-meta-tag/{id}', [MetaTagController::class, 'edit'])->name('edit-meta-tag');
    Route::put('save-meta-tag', [MetaTagController::class, 'update'])->name('save-meta-tag');

    //vessel type in master data
    // Route::get('qualification', [QualificationController::class, 'index'])->name('qualification');
    // Route::get('qualification/change-status/{id}', [QualificationController::class, 'changeStatus'])->name('qualification-change-status');
    // Route::get('qualification-list', [QualificationController::class, 'list'])->name('qualification-list');
    // Route::get('create-qualification', [QualificationController::class, 'create'])->name('create-qualification');
    // Route::post('store-qualification', [QualificationController::class, 'store'])->name('store-qualification');
    // Route::get('edit-qualification/{id}', [QualificationController::class, 'edit'])->name('edit-qualification');
    // Route::post('update-qualification', [QualificationController::class, 'update'])->name('update-qualification');
    // Route::delete('delete-qualification/{id}', [QualificationController::class, 'destroy'])->name('delete-qualification');


});
