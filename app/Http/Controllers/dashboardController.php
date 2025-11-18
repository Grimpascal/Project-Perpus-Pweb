<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function showDB(){
        $title = 'Dashboard';
        
        return view('dashboard');
    }
}
