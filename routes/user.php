<?php


use App\Http\Controllers\Customer\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/home', 'Customer\CustomerController@index')->name('index');

Route::group(['namespace' => "Customer"], function(){
    Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('dashboard');
    Route::get('/forgotpassword', [CustomerController::class, 'forgotpassword'])->name('forgotpassword');
    Route::get('/comment', [CustomerController::class, 'comment'])->name('comment');
    Route::get('/note', [CustomerController::class, 'note'])->name('note');
    Route::get('/miseajour', [CustomerController::class, 'miseajour'])->name('miseajour');
    Route::get('/school', [CustomerController::class, 'school'])->name('school');
    Route::get('/user', [CustomerController::class, 'user'])->name('user');
});



