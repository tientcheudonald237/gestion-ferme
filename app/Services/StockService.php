<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Product;
use App\Models\StockMovement;
use Illuminate\Http\Request;

class StockService
{
    public function out_of_stock($id_product,$quantity,$observation)
    {
        $stock_movement = new StockMovement();
        // $stock_movement->bill_number = $request->bill_number;
        $stock_movement->id_product = $id_product;
        $stock_movement->quantity = $quantity;
        // $stock_movement->unit_acquisition_price = $request->unit_acquisition_price;
        $stock_movement->observation = $observation ? $observation : '';  
        $stock_movement->type = 'out';
        $stock_movement->save();
        
        $product = Product::find($id_product);
        $product->stock -= $quantity;
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

    public function     enter_from_stock($id_product,$quantity,$observation,$bill_number,$unit_acquisition_price)
    {
        $stock_movement = new StockMovement();
        $stock_movement->bill_number = $bill_number;
        $stock_movement->id_product = $id_product;
        $stock_movement->quantity = $quantity;
        $stock_movement->unit_acquisition_price = $unit_acquisition_price;
        $stock_movement->observation = $observation ? $observation : '';
        $stock_movement->type = 'entry';
        $stock_movement->save();

        $product = Product::find($id_product);
        $product->stock += $quantity;
        $product->save(); 
    }
}