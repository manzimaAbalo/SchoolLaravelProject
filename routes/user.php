<?php


use App\Http\Controllers\Customer\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/home', 'Customer\CustomerController@index')->name('index');

Route::group(['namespace' => "Customer",'prefix'=>'espace-user'], function(){
    Route::get('/dashboard', [CustomerController::class, 'index'])->name('espace-user.dashboard');
    Route::get('/note', [CustomerController::class, 'userNotes'])->name('espace-user.notes');
    // Route::get('/forgotpassword', [CustomerController::class, 'forgotpassword'])->name('forgotpassword');
    // Route::get('/comment', [CustomerController::class, 'comment'])->name('comment');
    // Route::get('/miseajour', [CustomerController::class, 'miseajour'])->name('miseajour');
    // Route::get('/school', [CustomerController::class, 'school'])->name('school');
    // Route::get('/user', [CustomerController::class, 'user'])->name('user');
});



