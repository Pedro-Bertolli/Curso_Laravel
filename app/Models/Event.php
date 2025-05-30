<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;


    protected $casts = [
        'items' => 'array', // Cast items to array
    ];

    protected $dates = ['date']; // Cast date to Carbon instance];
}
