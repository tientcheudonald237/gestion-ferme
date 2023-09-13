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
        Job::factory(10)->create();
        \App\Models\User::factory()->create(
            [
                'name' => 'ZAZ',
                'email' => 'tientcheudonald237@gmail.com',
                'password' => Hash::make('nadege237'),
                'great_admin' => true,
                'job_id' => Job::first()->id,
            ]
        );
    }
}
