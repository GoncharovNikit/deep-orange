<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'test@gmail.com',
            'fullname' => 'Goncharov Nikita Vladimirovich',
            'password' => 'qwerty',
            'city_id' => 1
        ]);
        DB::table('users')->insert([
            'email' => 'test1@gmail.com',
            'fullname' => 'Usenco Dmytriy Vladimirovich',
            'password' => 'qwerty',
            'city_id' => 2
        ]);
        DB::table('users')->insert([
            'email' => 'test2@gmail.com',
            'fullname' => 'Andrey',
            'password' => 'qwerty',
            'city_id' => 1
        ]);
    }
}
