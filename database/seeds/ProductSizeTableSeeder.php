<?php

use Illuminate\Database\Seeder;

class ProductSizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('product_size')->insert([
    		['product_id' => 1, 'size_id' => 1],
    		['product_id' => 1, 'size_id' => 2],
    		['product_id' => 1, 'size_id' => 3],
    		['product_id' => 2, 'size_id' => 1],
    		['product_id' => 2, 'size_id' => 2],
    		['product_id' => 2, 'size_id' => 3],
    		['product_id' => 3, 'size_id' => 1],
    		['product_id' => 3, 'size_id' => 2],
    		['product_id' => 3, 'size_id' => 3],
    	]);
    }
}
