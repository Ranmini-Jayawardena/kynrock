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

Route::get('/admin', function () {
    return view('auth.login');
    // return view('welcome');
});

// Route::get('/', function () {
//     return view('userpanel.recruiter.recruiterform');
//     //return view('welcome');
// });






Route::get('/', [RecruiterFormController::class, 'index'])->name('candidate-form');
Route::post('new-cadidate', [RecruiterFormController::class, 'store'])->name('new-candidate');


Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);

require __DIR__ . '/auth.php';
