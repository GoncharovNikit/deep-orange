<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cities')->insert(['title' => 'Kharkiv']);
        DB::table('cities')->insert(['title' => 'Lviv']);
        DB::table('cities')->insert(['title' => 'Kyiv']);
    }
}
