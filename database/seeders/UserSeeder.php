<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash; // Not strictly needed if passwords are pre-hashed
use App\Models\User; // Import your User model

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Clear existing users to avoid duplicates if run multiple times
        // Be careful with this in a real production environment
        // User::truncate(); // Or DB::table('book_users')->truncate();

        User::create([
            'name' => 'Alice Wonderland',
            'email' => 'alice@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$12$rmhoAyzZ3VTv1X05zJY.K.fPJblThDwkHNQhyS0Tgk9bQLFskXq.m', // Pre-hashed password
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Bob The Builder',
            'email' => 'bob@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$12$HhkvCuGQx7FY00MnGFfcXOSnlykDS3cfJQTX1UabuLnC/DELMwLj6', // Pre-hashed password
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        User::create([
            'name' => 'Charlie Brown',
            'email' => 'charlie@example.com',
            'email_verified_at' => now(),
            'password' => '$2y$12$23r2ig6wmPI7e/LqUHUnMePNJ2C407WuqS8V1K69CPqamB3LDEeci', // Pre-hashed password
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}