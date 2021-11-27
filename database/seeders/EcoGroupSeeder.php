<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EcoGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('eco_groups')->insert([
            'title' => 'Derevosad',
            'purpose' => 'To Make the Ukraine Ecology better!'
        ]);
    }
}
