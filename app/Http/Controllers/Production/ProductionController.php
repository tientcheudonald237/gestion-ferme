<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    function index(){
        return view('production.index');
    }
}
