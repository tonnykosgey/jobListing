<?php

use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;

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

//Create a new user/Register

//Login to a your Account


// JOB LISTINGS RUTES
// all Listings
Route::get('/', [ListingController::class, 'index']);

//single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//store listing
Route::post('/listings', [ListingController::class, 'store']);

//Create a new Job
Route::get('/listings/create', [ListingController::class, 'create']);






// APPLICANTS ROUTES
//show applicants
Route::get('/applicants', [ApplicantsController::class, 'index']);

//Apply for a Job
Route::post('/applicants', [ApplicantsController::class, 'store']);

//show single applicant
Route::get('/single_applicant/{applicant}', [ApplicantsController::class, 'show']);


