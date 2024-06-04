<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user_login(){
        return view('user_auth.login');
    }

    public function user_register(){
        return view('user_auth.register');
    }

    public function user_logout(){
        Auth::logout();
        return redirect()->route('/');
    }
}
