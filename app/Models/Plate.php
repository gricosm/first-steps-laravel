<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plate extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'comensales',
        'gluten_free'
    ];

    protected $casts = [
        'gluten_free' => 'boolean',
    ];
}
