<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function authenticate(Request $request) {


        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('web')->attempt($credentials)){
            
            $request->session()->regenerate();
            
            return redirect()->intended('/admin');
        
        } else if (Auth::guard('pelanggan')->attempt($credentials)){
            $request->session()->regenerate();

            return redirect()->intended('/user');
        
        }

        return back()->with('loginError','Login Failed');

    }

    public function logout(Request $request){
        if(Auth::logout());

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
        

    }

    public function keluar(Request $request){
        if(Auth::logout());

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
        

    }
}
