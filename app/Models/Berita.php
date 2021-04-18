<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;
    protected $table = 'Berita';
    protected $fillable = [
        'title', 'content', 'author'
    ];
    protected $guarded = [];
}
