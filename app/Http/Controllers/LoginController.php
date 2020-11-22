<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/dashboard');
        }

        return redirect('/login')->with('Gagal',"gagal mask");
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
