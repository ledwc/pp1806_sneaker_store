<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Illuminate\Support\Str;
use Faker\Provider\Base;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    $filepath = public_path() . '/' . config('products.image_path');

    if (!File::exists($filepath)) {
        File::makeDirectory($filepath);
    }

    return [
        'product_name' => $faker->name, 
        'code' => $faker->unique()->randomDigit, 
        'status' => 1, 
        'avatar' => $faker->image($filepath, 400, 300), 
        'category_id' => str_random(2), 
    ];
});
