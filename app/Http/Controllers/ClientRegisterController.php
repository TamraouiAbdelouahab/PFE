<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientRegisterController extends Controller
{
    public function showSignUpForm()
    {
        return view('Profile.SignUp');
    }
    public function test()
    {
        return dd(Auth::guard('client')->user());
        // return view("test");
    }
}
