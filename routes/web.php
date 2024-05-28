<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientAuthController;
use App\Http\Controllers\ClientRegisterController;

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

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/Home', function () {
    return view('Home');
})->name("Home");
Route::get('/Login', [ClientAuthController::class,'showLoginForm'])->name('Login');
Route::post('/Login/Submit', [ClientAuthController::class,'login'])->name('login.submit');
Route::get('/SignUp', [ClientRegisterController::class,'showSignUpForm'])->name('SignUp');
Route::get('/test', [ClientRegisterController::class,'test'])->name('test');
Route::get('/testa', function(){return view('test');})->name('testo');
Route::post('/SignUp/Submit', [ClientRegisterController::class,'SignUp'])->name('SignUp.submit') ;





// Route::get('/SignUp', function () {
//     return view('Profile.SignUp');
// })->name("SignUp");
Route::get('/Contact', function () {
    return view('ContactUs');
})->name("Contact");
