<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'first_name' => 'Le',
        	'last_name' => 'Duc',
        	'email' => 'leduc.kma@gmail.com',
        	'password' => bcrypt('l3duc2908'),
        	'role_id' => config('roles.admin'),
        ]);
    }
}
