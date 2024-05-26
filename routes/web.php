<?php

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

Route::get('/', function () {
    return view('welcome');
})->name("welcome");

Route::get('/Home', function () {
    return view('Home');
})->name("Home");
Route::get('/Login', function () {
    return view('Login');
})->name("Login");
Route::get('/SignUp', function () {
    return view('SignUp');
})->name("SignUp");
