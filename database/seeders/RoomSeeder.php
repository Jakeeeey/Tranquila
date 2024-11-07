<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Room::create([
            'room_name' => 'Deluxe Room',
            'room_type' => 'Single',
            'capacity' => 2,
            'price' => 100,
        ]);

        Room::create([
            'room_name' => 'Executive Suite',
            'room_type' => 'Double',
            'capacity' => 4,
            'price' => 200,
        ]);

        // Add more sample rooms if needed
    }
}
