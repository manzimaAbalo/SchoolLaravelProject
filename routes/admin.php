<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SchoolController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => "Admin",'prefix'=>'office'], function () {
    Route::middleware(["admin.auth"])->group(function(){
        Route::get('/home', [AdminController::class, 'homePage'])->name('office.home');
        Route::get('/rules', [AdminController::class, 'rulePage'])->name('office.rules');
        Route::get('/notes', [AdminController::class, 'notePage'])->name('office.notes');
        Route::get('/comments', [AdminController::class, 'commentPage'])->name('office.comments');
        Route::get('/users', [AdminController::class, 'usersPage'])->name('office.users');
        Route::prefix('schools')->group(function(){
            Route::get('/', [AdminController::class, 'schoolPage'])->name('office.schools');
            Route::get('/create',[SchoolController::class, 'createSchoolPage'])->name('office.schools.create');
            Route::post('/add',[SchoolController::class, 'addSchool'])->name('office.schools.save');
        });
    });
    Route::get('/', [AdminController::class, 'loginPage'])->name('office.auth.login');
    Route::post('/admin-auth', [AdminController::class,'login'])->name('office.auth');
});
