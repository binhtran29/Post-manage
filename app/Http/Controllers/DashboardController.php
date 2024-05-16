<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function login(){
        return view('dashboard.login');
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }


}
