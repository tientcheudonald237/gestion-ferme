<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function all_inventory(){
        return $this->hasMany(StockMovement::class, 'id_product');
    }

    public static function no_animal_products()
    {
        return self::select('products.*')->join('categories', 'categories.id', '=', 'products.id_category')
            ->where('categories.code', '!=', 'animal');
    }

    public static function animal_products()
    {
        return self::select('products.*')->join('categories', 'categories.id', '=', 'products.id_category')
            ->where('categories.code', '=', 'animal');
    }
}
