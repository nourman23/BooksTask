<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Books extends Model
{
    use HasFactory, softDeletes;
    // public $timestamps = false;
    protected $fillable = ['book_title', 'book_description', 'book_auther', 'book_image'];
}