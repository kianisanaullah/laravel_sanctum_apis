<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	\Illuminate\Support\Facades\DB::table('users')->insert([
	    'name' => 'John Doe',
	    'email' => 'john@doe.com',
	    'password' => \Illuminate\Support\Facades\Hash::make('password')
	]);

    }
}
