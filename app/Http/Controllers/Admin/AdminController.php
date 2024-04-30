<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function home(){
        return view('admin.home');
    }

    public function school(){
        return view('admin.schools.school');
    }

    public function rule(){
        return view('admin.rules.rule');
    }

    public function note(){
        return view('admin.notes.note');
    }

    public function comment(){
        return view('admin.comments.comment');
    }

    public function user(){
        return view('admin.users.user');
    }
    public function logindash(){
        return view('admin.auth.logindash');
    }

    public function registerdash(){
        return view('admin.auth.registerdash');
    }

}
