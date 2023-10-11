<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\StockMovement;
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
        $products = Product::count(); 
        $categories = Category::count();
        return view('production.stock.index', compact('products', 'categories'));
    }

    function stock_order_index(){
        return view('production.stock.order.index');
    }

    function stock_supply_index(){
        return view('production.stock.supply.index');
    }

    function stock_inventory(){
        $stock_movements = StockMovement::all();
        $products = Product::all();
        $product = Product::find(2);

        return view('production.stock.inventory', compact('stock_movements', 'products'));
    }
}
