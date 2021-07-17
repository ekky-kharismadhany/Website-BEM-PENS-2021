<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkShortener extends Model
{
    use HasFactory;
    protected $fillable = [
        "link",
        "short-link"
    ];
}
