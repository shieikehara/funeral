<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class U_flower extends Model
{
    use HasFactory;

    const UPDATED_AT = NULL;
    protected $fillable = [
        'user_id',
        'flower_id',
        'created_at',
    ];
    protected $dates = [
        'created_at'
    ];
}
