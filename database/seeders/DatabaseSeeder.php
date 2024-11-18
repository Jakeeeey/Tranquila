<?php

// database/seeders/DatabaseSeeder.php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Call the RoomKTVSeeder to seed data for the roomktv table
        $this->call(RoomKTVSeeder::class); 
    }
}
