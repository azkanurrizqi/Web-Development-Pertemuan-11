<?php

namespace App\Http\Controllers;

use Illuminate\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Redirect;

class AuthController extends Controller 
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)\
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } else {
            return back()->with([
                'message' => 'Email atau Password tidak ditemukan.',
            ]);
        }


        $data = $request->except('password');
        $data('password') = Hash::make($request->password);
        User::create($data);
    }
}
