<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Funeral extends Model
{
    use HasFactory;

    protected $fillable = [
        'family_name',
        'deceased',
        'name',
        'day1',
        'day2',
        'dinner',
        'lunch',
        'funeral_style',
    ];
    protected $dates = [
        'created_at',
        'update_at',
    ];

}
