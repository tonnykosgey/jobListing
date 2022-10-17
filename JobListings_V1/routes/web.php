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

// all Listings
Route::get('/', [ListingController::class, 'index']);

//single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

//show applicants
Route::get('/applicants', [ApplicantsController::class, 'index']);

//show single applicant

Route::get('/single_applicant/{applicant}', [ApplicantsController::class, 'show']);