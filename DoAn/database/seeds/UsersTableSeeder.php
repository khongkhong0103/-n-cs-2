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
        DB::table('users')->insert([
        	'name' => 'Nguyễn Trọng Tâm',
        	'email' => 'trongtam068@gamil.com',
        	'password' => Hash::make('nguyentrongtam01'),
        	'role' => 1
        ]);
    }
}
