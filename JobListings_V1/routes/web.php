<?php

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
Route::get('/', function () {
    return view('listings',[
        'listings'=>Listing::all()
    ]);
});

//single listing
Route::get('/listing/{listing}', function(Listing $listing){

    return view('listing',[
        'listing'=> $listing
        ]);
    
});

//show applicants
Route::get('/applicants', function(){
    return view('applicants'); 
});

//show single applicant

Route::get('/single_applicant', function(){
    return view('single_applicant');
});