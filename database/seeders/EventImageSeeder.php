<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_images')->insert([
            'event_id' => 1,
            'img' => 'image1.jpg',
        ]);
        
        DB::table('event_images')->insert([
            'event_id' => 1,
            'img' => 'image2.jpg',
        ]);
    }
}
