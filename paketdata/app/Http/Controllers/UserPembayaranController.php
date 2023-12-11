<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPembayaranController extends Controller
{
    //
    public function index(){
        return view('user.pembayaran.index');
    }
}
