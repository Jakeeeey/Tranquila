<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomKTV extends Model
{
    use HasFactory;

    protected $table = 'roomktv'; // Specify the table name
    protected $fillable = ['name', 'is_available', 'booked_at']; // Fields that can be mass-assigned
}
