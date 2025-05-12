<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
    protected $primaryKey = 'book_id';
    public $timestamps = false; // Crucial line!

    protected $fillable = [
        'title',
        'book_condition',
        'price',
        'user_id',
        'created_by',
    ];
}