<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login() 
    {
        if (Auth::user() !== null) {
            return redirect()->intended('dashboard');
        }
        else {
            return view('login', [ 'title' => 'Login' ]);
        }
    }

    public function authenticate(Request $request) 
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]); 

        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials))
        {
            return redirect()->intended('dashboard');
        }
        else {
            return redirect()->back();
        }
    }

    public function logout()
    {
        Auth::logout();

        if (Auth::user() === null) {
            return redirect()->route('login');
        }
    }
}
