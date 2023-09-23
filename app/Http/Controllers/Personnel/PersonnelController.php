<?php

namespace App\Http\Controllers\Personnel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    function index(){
        return view('personnel.index');
    }
}
