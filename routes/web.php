<?php

use Illuminate\Support\Facades\Route;
// use Laravel\Socialite\Facades\Socialite;

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

// Route::get('/', function () {
//     return view('welcome');
// });



Auth::routes();


// Route::get('/auth/redirect', function () {
//     return Socialite::driver('github')->redirect();
// });

// Route::get('/auth/callback', function () {
//     $user = Socialite::driver('github')->user();

//     // $user->token
// });

Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);

Route::get('/data/industry/socialmedia/all', [App\Http\Controllers\AdsController::class, 'allsocial']);
Route::get('/data/industry/socialmedia/{id}', [App\Http\Controllers\AdsController::class, 'industrysocial']);


Route::get('/data/industry/percentage/all', [App\Http\Controllers\AdsController::class, 'allpercent']);
Route::get('/data/industry/percentage/{id}', [App\Http\Controllers\AdsController::class, 'industrypercent']);


Route::get('/data/{id}', [App\Http\Controllers\AdsController::class, 'industrydata']);
Route::get('/data', [App\Http\Controllers\AdsController::class, 'allindustry'])->name('allindustry');

Route::get('/conversions', [App\Http\Controllers\AdsController::class, 'conversions'])->name('conversions');

// Route::get('/landingpage', [App\Http\Controllers\AdsController::class, 'landingpage'])->name('landingpage');

Route::get('/', [App\Http\Controllers\AdsController::class, 'index'])->name('dashboard');



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin', 'middleware' => [ 'admin']], function () {

    Route::get('/create/tags', [App\Http\Controllers\TagController::class, 'create'])->name('tag.create');
    Route::post('/create/tags', [App\Http\Controllers\TagController::class, 'store'])->name('tag.store');

    Route::get('/create/adtype', [App\Http\Controllers\AdtypesController::class, 'create'])->name('adtype.create');
    Route::post('/create/adtype', [App\Http\Controllers\AdtypesController::class, 'store'])->name('adtype.store');

    Route::get('/create/industries', [App\Http\Controllers\IndustryController::class, 'create'])->name('industry.create');
    Route::post('/create/industries', [App\Http\Controllers\IndustryController::class, 'store'])->name('industry.store');

    Route::get('/create/socialmedia', [App\Http\Controllers\SocialsController::class, 'create'])->name('social.create');
    Route::post('/create/socialmedia', [App\Http\Controllers\SocialsController::class, 'store'])->name('social.store');

    Route::get('/create/percentage', [App\Http\Controllers\PercentageController::class, 'create'])->name('percentage.create');
    Route::post('/create/percentage', [App\Http\Controllers\PercentageController::class, 'store'])->name('percentage.store');



    Route::get('/create', [App\Http\Controllers\AdsController::class, 'create'])->name('ad.create');
    Route::post('/create/ad', [App\Http\Controllers\AdsController::class, 'store'])->name('ad.store');

});

