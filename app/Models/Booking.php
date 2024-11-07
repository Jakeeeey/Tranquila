<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Define fillable fields for mass assignment
    protected $fillable = [
        'room_id',
        'check_in_date',
        'check_out_date',
    ];

    // Define the relationship with the Room model
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}