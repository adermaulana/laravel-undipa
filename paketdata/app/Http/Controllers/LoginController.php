<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function authenticate(Request $request) {


        $credentials = $request->validate([
            'username_admin' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)){
            
            $request->session()->regenerate();
            
            return redirect()->intended('/admin');
        
        }

        return back()->with('loginError','Login Failed');

    }

    public function logout(Request $request){
        if(Auth::logout());

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }
}
