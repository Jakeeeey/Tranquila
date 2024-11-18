<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoomKTV;

class RoomKTVSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define some dummy rooms
        $rooms = [
            ['name' => 'Room A', 'is_available' => true],
            ['name' => 'Room B', 'is_available' => true],
            ['name' => 'Room C', 'is_available' => false, 'booked_at' => now()],
            ['name' => 'Room D', 'is_available' => true],
            ['name' => 'Room E', 'is_available' => false, 'booked_at' => now()->subDay()],
        ];

        // Insert the rooms into the database
        foreach ($rooms as $room) {
            RoomKTV::create($room);
        }
    }
}
