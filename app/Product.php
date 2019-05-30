<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'product_name', 'code', 'status', 'image', 'category_id', 'price',
    ];
}
