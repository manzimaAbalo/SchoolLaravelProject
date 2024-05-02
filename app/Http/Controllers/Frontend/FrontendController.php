<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //
    public function accueil(){
        return view('website.home.accueil');
    }

    public function aboutPage(){
        return view('website.about.about');
    }

    public function schoolPage(){
        return view('website.schools.index');
    }

    public function rate(){
        return view('website.rate.classement');
    }

    public function loginPage(){
        return view('website.auth.login');
    }

    public function register(){
        return view('website.auth.register');
    }

    public function schoolPageDetails(Request $request){
        $school_id = $request->school_id;
        return view('website.schools.details-school', [
            'school_id' => $school_id
        ]); 
    }

}
