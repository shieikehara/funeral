<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complete extends Model
{
    use HasFactory;

    const UPDATED_AT = NULL;
    public $fillable = [
        'user_id',
        'comp_user'
    ];
    protected $dates = [
        'created_at'
    ];
}
?>