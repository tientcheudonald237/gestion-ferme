<?php

namespace Database\Seeders;

use App\Models\Job;
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
                'name' => 'djiele james',
                'email' => 'djielejames@gmail.com',
                'password' => Hash::make('ayobo237'),
            ]
        );
    }
}
