<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    function index(){
        return view('production.index');
    }
    function follow_animal(){
        return view('production.follow.animal');
    }
    function follow_food(){
        return view('production.follow.food');
    }

    function follow_prophylaxis(){
        return view('production.follow.prophylaxis');
    }

    function stock_index(){
        return view('production.stock.index');
    }

    function stock_order_index(){
        return view('production.stock.order.index');
    }

    function stock_supply_index(){
        return view('production.stock.supply.index');
    }
}
