<?php

namespace App\Http\Controllers\Commercialisation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommercialisationController extends Controller
{
    function index(){
        return view('commercialisation.index');
    }
}
