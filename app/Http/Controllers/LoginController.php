<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {
        return view('Login');
    }

    public function authenticate(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();

            return redirect()->intended('/ab');
        }

        return back()->with('loginError', 'Login Gagal');
    }

    
}
