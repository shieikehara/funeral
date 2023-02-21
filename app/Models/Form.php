<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'tel',
        'mail',
        'body',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
