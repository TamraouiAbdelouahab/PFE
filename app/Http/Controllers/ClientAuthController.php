<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\error;

class ClientAuthController extends Controller
{
    public function login(Request $request)
    {
        // DB::table('client')->insert([
        //     'nom' => 'John',
        //     'prenom' => 'Doe',
        //     'email' => 'john@example.com',
        //     'phone_number'=>'0675257322',
        //     'password' => hash::make('123456789'),
        // ]);
        $validatedData = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if(Auth::guard('client')->attempt($validatedData))
        {
            $request->session()->regenerate();
            // return redirect()->route('test');
            return dd(auth::guard('client')->user());
        }
        else
        {
            return back()->withErrors([
                'error'=>'Incorrect email or password'
            ])->onlyInput('email');
        }
    }
    public function showLoginForm()
    {
        return view('Profile.Login');
    }
}
