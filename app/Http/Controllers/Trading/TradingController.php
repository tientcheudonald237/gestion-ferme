<?php

namespace App\Http\Controllers\Trading;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TradingController extends Controller
{
    function index(){
        return view('trading.index');
    }
}
