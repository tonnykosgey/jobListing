<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ApplicantsController extends Controller
{
    //show all applicants

    public function index(){

        return view('applicants.index',[
            
            'applicants'=>Applicant::latest()->filter(request(['search']))->get()
        ]);

    }

    // show single applicants
    public function show(Applicant $applicant ){
        
        return view('applicants.show',[
            'applicant'=> $applicant
            ]);

    }

    //store new application
    public function store(Request $request){
        $formFields=$request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>['required','email'],
            'phone' => 'required|numeric|digits:10',
            'description'=>'required',
            'skills'=>'required'

        ]);


        Applicant::create($formFields);

        return redirect('/');
    }
}
