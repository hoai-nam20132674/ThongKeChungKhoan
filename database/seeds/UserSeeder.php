<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
        	[
        		'name' =>'Nam Nguyễn',
        		'email' =>'namnguyen20132674@gmail.com',
        		'password'=>Hash::make('1'),
                'role' => 1,
                'phone' => '0848384333',
        	]
        	
        	]
        );
    }
}
