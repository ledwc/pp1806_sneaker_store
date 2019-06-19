<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	['brand_name' => 'Vans'],
        	['brand_name' => 'Adidas'],
        	['brand_name' => 'Converse'],
        	['brand_name' => 'Nike'],
        ]);
    }
}
