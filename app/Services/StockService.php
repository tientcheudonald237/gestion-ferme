<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Product;
use App\Models\StockMovement;
use Illuminate\Http\Request;

class StockService
{
    public function out_of_stock($request)
    {
        $stock_movement = new StockMovement();
        // $stock_movement->bill_number = $request->bill_number;
        $stock_movement->id_product = $request->id_product;
        $stock_movement->quantity = $request->quantity;
        // $stock_movement->unit_acquisition_price = $request->unit_acquisition_price;
        $stock_movement->observation = $request->observation ? $request->observation : '';  
        $stock_movement->type = 'out';
        $stock_movement->save();
        
        $product = Product::find($request->id_product);
        $product->stock -= $request->quantity;
        $product->save();

        if( $product->stock <= $product->alert_stock ){
            $order = Order::where('id_product', $product->id)->first();
            if($order){
                $order->current_stock = $product->stock;
            }else{
                $order = new Order();
                $order->current_stock = $product->stock;
                $order->id_product = $product->id;
            }
            $order->save();
        }
    }

    public function enter_from_stock(Request $request)
    {
        $stock_movement = new StockMovement();
        $stock_movement->bill_number = $request->bill_number;
        $stock_movement->id_product = $request->id_product;
        $stock_movement->quantity = $request->quantity;
        $stock_movement->unit_acquisition_price = $request->unit_acquisition_price;
        $stock_movement->observation = $request->observation ? $request->observation : '';
        $stock_movement->type = 'entry';
        $stock_movement->save();

        $product = Product::find($request->id_product);
        $product->stock += $request->quantity;
        $product->save(); 
    }
}