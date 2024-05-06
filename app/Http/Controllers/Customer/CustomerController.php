<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        return view('espace-user.pages.dashboard.home');
    }

    public function comment(){
        return view('espace-user.pages.comments.comment');
    }

    public function note(){
        return view('espace-user.pages.notes.note');
    }

    public function update(){
        return view('espace-user.pages.profile.miseajour');
    }

    public function rule(){
        return view('espace-user.pages.rules.rule');
    }

    public function school(){
        return view('espace-user.pages.schools.school');
    }

    public function user(){
        return view('espace-user.pages.users.user');
    }

    public function login(){
        return view('espace-user.pages.auth.login');
    }

    public function register(){
        return view('espace-user.pages.auth.register');
    }

    public function forgotpassword(){
        return view('espace-user.pages.auth.forgotpassword');
    }
}
