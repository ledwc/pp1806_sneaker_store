<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = [
        'total_price',
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'address',
        'total_quantity',
    ];
}
