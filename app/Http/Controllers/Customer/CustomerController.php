<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view('espace-user.pages.user-profile',[
            'user' => $user,
            'profile'=>$user->profile,
        ]);
    }

    public function userNotes(){
        return view("espace-user.pages.user-notes");
    }


}
