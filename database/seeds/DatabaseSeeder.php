<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    $this->call([
	        AdminTableSeeder::class,
	        CategoriesTableSeeder::class,
	        ProductsTableSeeder::class,
            ProductSizeTableSeeder::class,
	        RolesTableSeeder::class,
	        SizeTableSeeder::class,
	    ]);
    }
}