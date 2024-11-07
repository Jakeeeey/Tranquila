<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            RoomSeeder::class,
            BookingSeeder::class, // Run BookingSeeder after RoomSeeder
        ]);
    }
}
