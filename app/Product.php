<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'id',
        'product_name',
    	'code',
    	'status',
    	'image',
    	'category_id',
    	'price',
    ];

    public function sizes() {
        return $this->belongsToMany('App\Size', 'product_size');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }
}
