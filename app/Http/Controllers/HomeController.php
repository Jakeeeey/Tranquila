<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomKTV;
use Carbon\Carbon;

class HomeController extends Controller
{
    // Search Available Rooms for hotel rooms (hotel booking logic)
    public function searchRooms(Request $request){
        $checkin = $request->input('checkin');
        $checkout = $request->input('checkout');

        $rooms = Room::whereDoesntHave('bookings', function ($query) use ($checkin, $checkout) {
            $query->where(function ($query) use ($checkin, $checkout) {
                $query->whereBetween('check_in_date', [$checkin, $checkout])
                      ->orWhereBetween('check_out_date', [$checkin, $checkout]);
            });
        })->get();

        return view('room-results', compact('rooms', 'checkin', 'checkout'));
    }
    //the ff. functions are for ktv rooms and not hotel rooms
    // Handle the ktvbooking logic
    public function showDatePicker(){
     return view('booking.date-picker');
    }
    public function showAvailableRooms(Request $request){
        $request->validate([
            'date' => 'required|date',
        ]);

        // Get the selected date from the request
        $selectedDate = Carbon::parse($request->date);

        // Check which rooms are available
        $availableRooms = RoomKTV::where(function ($query) use ($selectedDate) {
            $query->where('is_available', true)
                  ->orWhere(function ($query) use ($selectedDate) {
                      $query->whereNull('booked_at')
                            ->orWhere('booked_at', '<', $selectedDate);
                  });
        })->get();

        // Redirect to the page displaying the available rooms
        return view('booking.available-rooms', compact('availableRooms', 'selectedDate'));
    }
     // Handle room ktvbooking
     public function bookRoom(RoomKTV $room, Request $request)
     {
         $request->validate([
             'date' => 'required|date',
         ]);
 
         $selectedDate = Carbon::parse($request->date);
 
         // Book the room for exactly 24 hours
         $room->update([
             'is_available' => false,
             'booked_at' => $selectedDate,
         ]);
 
         return redirect()->route('booking.date-picker')->with('success', 'Room booked successfully!');
     }
     

   
}
