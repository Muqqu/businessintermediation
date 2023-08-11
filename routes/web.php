<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ListingController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/my-account', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Route::middleware(['middleware' => 'auth'])->group(function() {
	Route::get('add-listing', [ListingController::class, 'addListing'])->name('add-listing');
	Route::get('package', [ListingController::class, 'package'])->name('package');
	Route::get('create-listing', [ListingController::class, 'createListing'])->name('create-listing');
	Route::post('store-listing', [ListingController::class, 'storeListing'])->name('listing.add');
	Route::get('all-listings', [ListingController::class, 'allListings'])->name('all-listings');
});  
