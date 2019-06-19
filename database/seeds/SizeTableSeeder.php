<?php

use Illuminate\Database\Seeder;

class SizeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sizes')->insert([
        	['size_name' => '36',],
        	['size_name' => '37',],
        	['size_name' =>  '38',],
        	['size_name' =>  '39',],
        	['size_name' =>  '40',],
        	['size_name' =>  '41',],
        ]);
    }
}
