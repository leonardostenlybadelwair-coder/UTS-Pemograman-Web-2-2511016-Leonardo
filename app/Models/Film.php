<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['title', 'director', 'release_year'];
    
    /** @use HasFactory<\Database\Factories\FilmFactory> */
    use HasFactory;
}
