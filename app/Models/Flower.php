<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    use HasFactory;

    const UPDATED_AT = NULL;
    protected $fillable = [
        'name',
        'tel',
        'nameplate',
        'flower',
        'volume',
        'funeral_id',
        'created_at',
    ];
    protected $dates = [
        'created_at'
    ];
}
