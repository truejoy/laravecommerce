<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'SKU',
        'images',
        'category',
        'sub_category',
        'price',
        'discount'
    ];
}
