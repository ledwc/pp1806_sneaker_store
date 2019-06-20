<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('products')->insert([
    		['product_name' => 'Vans Authentic', 'code' => 1, 'status' => 1, 'image' => '/vansauthentic.jpeg', 'category_id' => 1, 'price' => 890000],
    		['product_name' => 'Vans OldSkool', 'code' => 2, 'status' => 1, 'image' => '/vansoldskool.jpeg', 'category_id' => 1, 'price' => 900000],
    		['product_name' => 'Vans Era', 'code' => 3, 'status' => 1, 'image' => '/vansera.jpeg', 'category_id' => 1, 'price' => 890000],
            ['product_name' => 'Adidas Superstar', 'code' => 1, 'status' => 1, 'image' => '/adidassuperstar.jpg', 'category_id' => 2, 'price' => 990000],
            ['product_name' => 'Adidas Stansmith', 'code' => 2, 'status' => 1, 'image' => '/adidasstansmith.jpeg', 'category_id' => 2, 'price' => 1200000],
            ['product_name' => 'Adidas Ultraboot', 'code' => 3, 'status' => 1, 'image' => '/adidasultraboot.jpeg', 'category_id' => 2, 'price' => 2000000],
            ['product_name' => 'Converse 1970s', 'code' => 1, 'status' => 1, 'image' => '/converse1970s.jpg', 'category_id' => 3, 'price' => 1600000],
            ['product_name' => 'Converse Classic', 'code' => 2, 'status' => 1, 'image' => '/converseclassic.png', 'category_id' => 3, 'price' => 890000],
            ['product_name' => 'Converse Jack Purcell', 'code' => 3, 'status' => 1, 'image' => '/conversejackpurcell.jpg', 'category_id' => 3, 'price' => 1200000],
            ['product_name' => 'Nike Airmax', 'code' => 1, 'status' => 1, 'image' => '/nikeairmax.png', 'category_id' => 4, 'price' => 1890000],
            ['product_name' => 'Nike Airforce', 'code' => 2, 'status' => 1, 'image' => '/nikeairforce.jpg', 'category_id' => 4, 'price' => 890000],
            ['product_name' => 'Nike Killshot', 'code' => 3, 'status' => 1, 'image' => '/nikekillshot.jpg', 'category_id' => 4, 'price' => 890000],
    	]);
    }
}
