<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantsController extends Controller
{
    //show all applicants

    public function index(){

        return view('applicants',[
            'applicants'=>Applicant::all()
        ]);

    }

    // show single applicants
    public function show(Applicant $applicant ){
        
        return view('single_applicant',[
            'applicant'=> $applicant
            ]);

    }
}
