<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Embroidery extends Model
{
    protected $table = 'embroidery';

    protected $fillable = ['name', 'image', 'price', 'description'];
}