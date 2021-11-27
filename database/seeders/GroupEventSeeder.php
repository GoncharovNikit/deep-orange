<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GroupEventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_events')->insert([
            'group_id' => 1,
            'event_date' => Carbon::now(),
            'city_id' => 1,
            'description' => 'Будем сажать лес новый'
        ]);

        DB::table('group_events')->insert([
            'group_id' => 1,
            'event_date' => Carbon::now(),
            'city_id' => 2,
            'description' => 'Будем сажать кустарник новый'
        ]);
    }
}
