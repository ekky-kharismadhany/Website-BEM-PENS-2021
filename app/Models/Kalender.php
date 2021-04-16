<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalender extends Model
{
    protected $table = "kalenders";
    protected $fillable = [
        'title', 'deskripsi', 'start', 'end', 'url'
    ];
    protected $hidden = [];
}
