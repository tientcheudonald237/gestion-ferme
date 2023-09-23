<?php

namespace App\Http\Controllers\Comptabilite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComptabiliteController extends Controller
{
    function index(){
        return view('comptabilite.index');
    }
}
