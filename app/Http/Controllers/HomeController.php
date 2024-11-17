<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;

class HomeController extends Controller
{
    //Search Available Rooms
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
}
