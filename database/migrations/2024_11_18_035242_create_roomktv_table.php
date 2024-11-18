<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
     Schema::create('roomktv', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Name of the room
        $table->boolean('is_available')->default(true); // Availability of the room
        $table->timestamp('booked_at')->nullable(); // Store the booking time
        $table->timestamps();
     });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roomktv');
    }
};
