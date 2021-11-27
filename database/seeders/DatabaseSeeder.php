<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CitySeeder::class,
            EcoGroupSeeder::class,
            UserSeeder::class,
            UserPlantSeeder::class,
            UsersGroupSeeder::class,
            PostSeeder::class,
            GroupEventSeeder::class,
            PostImageSeeder::class,
            CommentSeeder::class
        ]);
    }
}
