<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books';
    public $timestamps = false;


    protected $fillable = [
        'id',
        'book_name',
        'description',
        'status'
        
        ];
}
