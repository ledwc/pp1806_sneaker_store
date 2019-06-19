<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'brand_name',
    ];

    public function products() {
    	return $this->hasMany('App\Product');
    }
}
