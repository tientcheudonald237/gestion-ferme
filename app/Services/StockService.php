<?php

namespace App\Services;

use App\Models\Product;
use App\Models\StockMovement;

class StockService
{
    public function out_of_stock($request)
    {
        $stock_movement = new StockMovement();
        $stock_movement->bill_number = $request->bill_number;
        $stock_movement->id_product = $request->id_product;
        $stock_movement->quantity = $request->quantity;
        $stock_movement->unit_acquisition_price = $request->unit_acquisition_price;
        $stock_movement->observation = $request->observation ? $request->observation : '';
        $stock_movement->save();

        $product = Product::find($request->id_product);
        // if( $product)
    }

    public function enter_from_stock()
    {
        //
    }
}