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
            PermissionTableSeeder::class,
            AdminSeeder::class,
            AboutSeeder::class,
            GallerySeeder::class,
            NewsSeeder::class,
            DestinationSeeder::class,
            // UsersSeeder::class,
        ]);
    }
}
