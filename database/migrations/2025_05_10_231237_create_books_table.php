<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            // Primary key as defined in App\Models\Books ($primaryKey = 'book_id')
            $table->bigIncrements('book_id');

            $table->string('title', 500);

            // Storing book_condition as string. Based on addbook.blade.php, values like "1", "2" are submitted.
            // The BookController uses ucwords($condition), which would store these as "1", "2".
            // Validation rule is max:500.
            $table->string('book_condition', 500);

            $table->decimal('price', 10, 2); // Standard precision for monetary values

            // Foreign key to the users table (book_users)
            // NOTE: Your App\Models\User model defines $primaryKey = 'user_id',
            // but the '2014_10_12_000000_create_users_table.php' migration for 'book_users'
            // uses $table->id(), which creates a primary key column named 'id'.
            // Auth::id() will return the value from the 'id' column.
            // Therefore, these foreign keys should reference 'id' on 'book_users'.
            $table->unsignedBigInteger('user_id'); // Represents the owner/seller of the book
            $table->unsignedBigInteger('created_by'); // Represents who created the listing

            // App\Models\Books has $timestamps = FALSE;, so we don't add $table->timestamps() here.
            // If you need created_at/updated_at, set $timestamps = TRUE in the model and add $table->timestamps();

            // Foreign key constraints
            $table->foreign('user_id')->references('id')->on('book_users')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('book_users')->onDelete('cascade');

            // Index for price column as it's used in ORDER BY in BookController@index
            $table->index('price');
            // Indexes for user_id and created_by are typically created automatically with foreign key constraints
            // by most database engines (like MySQL with InnoDB). If not, you can add them explicitly:
            // $table->index('user_id');
            // $table->index('created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }
};