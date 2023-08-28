<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.login');
    }

    public function authenticate(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        //dd($credentials);
        //$hashedPassword = Hash::make($request->password);
        if (Auth::attempt($credentials)) {
            dump(auth()->user());
            dump('hhhh');
            dd(Auth::user());
            dd('logged in');
           // $request->session()->regenerate();
 
           // rereturn redirect()->route('dashboard');turn redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
