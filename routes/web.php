<?php


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Frontend\AboutUsController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\ExperienceController;
use App\Http\Controllers\Frontend\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\StayController;
use App\Http\Controllers\Frontend\WeddingController;

Route::get('/admin', function () {
    return view('auth.login');
    // return view('welcome');
});

Route::get('/contact-us', function () {
    return view('frontend.contact_us');
    //return view('welcome');
});






Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/location', [LocationController::class, 'index'])->name('location');
Route::get('/wedding', [WeddingController::class, 'index'])->name('wedding');
Route::get('/stay', [StayController::class, 'index'])->name('stay');
Route::get('/room-details/{id}', [StayController::class, 'RoomDetail'])->name('room-details');
Route::get('/experience', [ExperienceController::class, 'index'])->name('experience');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact-us');
Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact.us.store');
Route::post('new-enquiry', [ContactUsController::class, 'store'])->name('new-enquiry');


require __DIR__ . '/auth.php';
