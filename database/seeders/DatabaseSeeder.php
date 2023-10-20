<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Category;
use App\Models\Job;
use App\Models\Lodge;
use App\Models\Product;
use App\Models\StockMovement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create(
            [
                'name' => 'Donald Tientcheu',
                'email' => 'tientcheudonald237@gmail.com',
                'password' => Hash::make('12345678'),
            ]
        );
        Category::factory()->count(5)->create();
        Product::factory()->count(5)->create();
        StockMovement::factory()->count(10)->create();
        Building::factory()->count(3)->create();
        Lodge::factory()->count(30)->create();
    }
}
