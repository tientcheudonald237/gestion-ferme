<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    function index(){
        if (Auth::check()) {
            return view('home2');
        }else{
            return view('auth.login');
        }
    }
}
