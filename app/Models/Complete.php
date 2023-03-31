<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    use HasFactory;

    const UPDATED_AT = NULL;
    public $fillable = [
        'form_id',
        'user_id'
    ];
    protected $dates = [
        'created_at'
    ];
}
?>