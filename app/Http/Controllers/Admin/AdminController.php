<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function homePage(){
        return view('espace-admin.pages.dashboard.home');
    }

    public function schoolPage(){
        return view('espace-admin.pages.schools.school');
    }

    public function rulePage(){
        return view('espace-admin.pages.rules.rule');
    }

    public function notePage(){
        return view('espace-admin.pages.notes.note');
    }

    public function commentPage(){
        return view('espace-admin.pages.comments.comment');
    }

    public function usersPage(){
        return view('espace-admin.pages.users.user');
    }
    public function loginPage(){
        return view('espace-admin.pages.auth.logindash');
    }

}
