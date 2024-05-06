<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolController extends Controller
{

    public function createSchoolPage(){
        return view('espace-admin.pages.schools.add-school');
    }

    public function addSchool(Request $request){
        $message = "";
        try {

        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
