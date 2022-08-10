<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('asdfasdf'),
            'role' => 'admin',
        ]);


        User::create([
            'name' => 'Test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('asdfasdf'),
        ]);

        \App\Models\User::factory(20)->create();

    }
}
