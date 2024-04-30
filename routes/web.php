<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'Frontend\FrontendController@accueil')->name('accueil');

Route::group(['namespace' => "Frontend"],function () {
    Route::get('/a-propos', [FrontendController::class, 'aboutPage'])->name('about');
    Route::get('/universites', [FrontendController::class, 'schoolPage'])->name('schools');
    Route::get('/universites/{school_id}/details', [FrontendController::class, 'schoolPageDetails'])->name('details');
    Route::get('/classement', [FrontendController::class, 'rate'])->name('rate');
    Route::get('/login', [FrontendController::class, 'login'])->name('login');
    Route::get('/register', [FrontendController::class, 'register'])->name('register');

});

Route::get('/dash', 'Admin\AdminController@home')->name('home');

Route::group(['namespace' => "Admin"], function () {
    Route::get('/home', [AdminController::class, 'home'])->name('home');
    Route::get('/school', [AdminController::class, 'school'])->name('school');
    Route::get('/rule', [AdminController::class, 'rule'])->name('rule');
    Route::get('/note', [AdminController::class, 'note'])->name('note');
    Route::get('/comment', [AdminController::class, 'comment'])->name('comment');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
    Route::get('/logindash', [AdminController::class, 'logindash'])->name('logindash');
    Route::get('/registerdash', [AdminController::class, 'registerdash'])->name('registerdash');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//require __DIR__.'/auth.php';
