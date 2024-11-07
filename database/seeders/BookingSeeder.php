<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Booking;
use App\Models\Room;
use Carbon\Carbon;

class BookingSeeder extends Seeder
{
    public function run()
    {
        // Get a sample room to link with bookings
        $room = Room::first(); // Adjust if you have specific room IDs

        // Add a sample booking for the room
        Booking::create([
            'room_id' => $room->id,
            'check_in_date' => Carbon::now()->addDays(1),
            'check_out_date' => Carbon::now()->addDays(3),
        ]);

        Booking::create([
            'room_id' => $room->id,
            'check_in_date' => Carbon::now()->addDays(5),
            'check_out_date' => Carbon::now()->addDays(7),
        ]);

        // Add more bookings as needed
    }
}