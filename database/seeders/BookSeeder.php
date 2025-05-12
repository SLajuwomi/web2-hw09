<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;  // Import User model
use App\Models\Books; // Import your Books model

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Books::truncate(); // Or DB::table('books')->truncate();

        // Find users by their email (assuming UserSeeder ran first)
        $alice = User::where('email', 'alice@example.com')->first();
        $bob = User::where('email', 'bob@example.com')->first();
        $charlie = User::where('email', 'charlie@example.com')->first();

        if ($alice) {
            Books::create(['title' => 'The Great Gatsby', 'book_condition' => '3', 'price' => 10.99, 'user_id' => $alice->id, 'created_by' => $alice->id]);
            Books::create(['title' => 'To Kill a Mockingbird', 'book_condition' => '4', 'price' => 15.50, 'user_id' => $alice->id, 'created_by' => $alice->id]);
            Books::create(['title' => 'Adventures in Wonderland', 'book_condition' => '2', 'price' => 8.75, 'user_id' => $alice->id, 'created_by' => $alice->id]);
            Books::create(['title' => 'Dune', 'book_condition' => '4', 'price' => 18.50, 'user_id' => $alice->id, 'created_by' => $alice->id]);
            Books::create(['title' => 'War and Peace', 'book_condition' => '2', 'price' => 14.30, 'user_id' => $alice->id, 'created_by' => $alice->id]);
        }

        if ($bob) {
            Books::create(['title' => '1984', 'book_condition' => '4', 'price' => 7.25, 'user_id' => $bob->id, 'created_by' => $bob->id]);
            Books::create(['title' => 'Brave New World', 'book_condition' => '3', 'price' => 9.00, 'user_id' => $bob->id, 'created_by' => $bob->id]);
            Books::create(['title' => 'Building for Dummies', 'book_condition' => '1', 'price' => 19.99, 'user_id' => $bob->id, 'created_by' => $bob->id]);
            Books::create(['title' => 'The Hobbit', 'book_condition' => '3', 'price' => 11.20, 'user_id' => $bob->id, 'created_by' => $bob->id]);
            Books::create(['title' => 'The Lord of the Rings', 'book_condition' => '4', 'price' => 29.99, 'user_id' => $bob->id, 'created_by' => $bob->id]);
        }

        if ($charlie) {
            Books::create(['title' => 'Pride and Prejudice', 'book_condition' => '3', 'price' => 22.00, 'user_id' => $charlie->id, 'created_by' => $charlie->id]);
            Books::create(['title' => 'The Catcher in the Rye', 'book_condition' => '2', 'price' => 12.75, 'user_id' => $charlie->id, 'created_by' => $charlie->id]);
            Books::create(['title' => 'Peanuts Collection', 'book_condition' => '4', 'price' => 25.00, 'user_id' => $charlie->id, 'created_by' => $charlie->id]);
            Books::create(['title' => 'Moby Dick', 'book_condition' => '1', 'price' => 5.99, 'user_id' => $charlie->id, 'created_by' => $charlie->id]);
        }
    }
}