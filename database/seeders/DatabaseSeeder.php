<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create(); // Keep this commented if not using factories for users

        $this->call([
            UserSeeder::class,
            BookSeeder::class,
        ]);
    }
}