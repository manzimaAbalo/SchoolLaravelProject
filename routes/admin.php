<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => "Admin",'prefix'=>'office'], function () {
    Route::get('/home', [AdminController::class, 'homePage'])->name('office.home');
    Route::get('/schools', [AdminController::class, 'schoolPage'])->name('office.schools');
    Route::get('/rules', [AdminController::class, 'rulePage'])->name('office.rules');
    Route::get('/notes', [AdminController::class, 'notePage'])->name('office.notes');
    Route::get('/comments', [AdminController::class, 'commentPage'])->name('office.comments');
    Route::get('/users', [AdminController::class, 'usersPage'])->name('office.users');
    Route::get('/', [AdminController::class, 'loginPage'])->name('office.auth.login');
});
