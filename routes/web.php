<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Frontend\AuthController;
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

Route::get('/', 'Frontend\FrontendController@accueil')->name('accueil');

Route::group(['namespace' => "Frontend"],function () {
    Route::get('/a-propos', [FrontendController::class, 'aboutPage'])->name('about');
    Route::get('/universites', [FrontendController::class, 'schoolPage'])->name('schools');
    Route::get('/universites/{school_id}/details', [FrontendController::class, 'schoolPageDetails'])->name('school.details');
    Route::get('/classement', [FrontendController::class, 'rate'])->name('rate');
    Route::get('/classement/category', [FrontendController::class, 'rateByCategory'])->name('rate.category');
    Route::get('/login', [FrontendController::class, 'loginPage'])->name('login');
    Route::get('/register', [FrontendController::class, 'register'])->name('register');
    Route::post('register-user', [AuthController::class, 'registerUser'])->name('register.user');
    Route::post('login', [AuthController::class, 'login']);

    Route::post('/schools/add-comment',[FrontendController::class, 'add_school_comment'])->name('school.comment.save');
    Route::post('/schools/add-notation',[FrontendController::class, 'add_school_notation'])->name('school.notation.add');


});

// Route::group(['middleware'=>['auth']],function(){
//     Route::prefix('mon-espace')->group(function(){
//         Route::get('/dashboard',[CustomerController::class,'index'])->name('dashboard');
//     });
// });



require __DIR__.'/admin.php';
require __DIR__.'/user.php';
require __DIR__.'/auth.php';


