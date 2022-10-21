<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Faker\Provider\bg_BG\PhoneNumber;

class ListingController extends Controller
{

    //show all listings 

    public function index(){

        return view('listings.index',[
            'listings'=>Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);

    }

    //show single listing
    public function show(Listing $listing){

        return view('listings.show',[
            'listing'=> $listing
            ]);

    }


    //create new listing

    public function create(){
        return view('listings.create');
    }


    //store new listing data

    public function store(Request $request){
           // dd($request->all());
        $formFields = $request->validate([
            'title' => 'required',
            'company'=> 'required',
            'email'=> ['required', 'email'],
            'phone' => 'required|numeric|digits:10',
            'website'=> 'required',
            'location'=> 'required',
            'tags'=> 'required',
            'description'=> 'required'
        ]);    
        
        Listing::create($formFields);
        return redirect('/')->with('message', 'Listing Created Successfully');
    }
}
