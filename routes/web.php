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
use App\Http\Controllers\Frontend\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\LocationController;
use App\Http\Controllers\Frontend\WeddingController;

Route::get('/admin', function () {
    return view('auth.login');
    // return view('welcome');
});

Route::get('/wedding', function () {
    return view('frontend.wedding');
    //return view('welcome');
});






Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/location', [LocationController::class, 'index'])->name('location');
Route::get('/wedding', [WeddingController::class, 'index'])->name('wedding');

require __DIR__ . '/auth.php';
