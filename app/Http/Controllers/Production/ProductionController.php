<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Lodge;
use App\Models\Order;
use App\Models\Product;
use App\Models\StockMovement;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    function index(){
        return view('production.index');
    }
    function follow_animal(){
        return view('production.follow.animal.index');
    }
    function follow_food(){
        return view('production.follow.food');
    }

    function follow_prophylaxis(){
        return view('production.follow.prophylaxis');
    }

    function stock_index(){
        $products = Product::count(); 
        $categories = Category::count();
        return view('production.stock.index', compact('products', 'categories'));
    }

    function stock_order_index(){
        $valide = Order::where('status', 'valide')->get();
        $transmited = Order::where('status', 'transmitted')->get();
        $in_progress = Order::where('status', 'in_progress')->get();
        $potential = Order::where('status', 'potential')->get();
        return view('production.stock.order.index', compact('valide', 'transmited', 'in_progress', 'potential'));
    }

    function stock_supply_index(){
        $valide = Order::where('status', 'valide')->get();
        
        return view('production.stock.supply.index', compact('valide'));
    }

    function stock_inventory(){
        $stock_movements = StockMovement::all();
        $products = Product::all();
        $product = Product::find(2);

        return view('production.stock.inventory', compact('stock_movements', 'products'));
    }

    function give_birth(){
        $lodges = Lodge::all();
        $animals = Product::select('products.*')
            ->join('categories', 'categories.id', '=', 'products.id_category')
            ->where('categories.code', 'animal')
            ->get();

        return view('production.follow.animal.give_birth', compact('lodges', 'animals'));
    }

    function acquire(){
        $lodges = Lodge::all();

        return view('production.follow.animal.acquire', compact('lodges'));
    }
}
