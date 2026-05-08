<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class baby_clothes_product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'price',
        'description',
    ];
}
