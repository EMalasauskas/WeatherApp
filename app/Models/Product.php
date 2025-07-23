<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'date',
        'condition',
        'suggestion_1',
        'suggestion_2',
    ];
}