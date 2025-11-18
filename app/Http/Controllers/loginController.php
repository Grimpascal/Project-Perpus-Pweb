<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login(){
        $title = 'Login';
        return view('login', compact('title'));
    }

    public function showRegis(){
        $title = 'Register';
        return view('register', compact('title'));
    }
}
