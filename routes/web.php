<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function () {
    return view('test');
});

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/rooms', [UserController::class, 'rooms'])->name('rooms');
Route::get('/dine', [UserController::class, 'dine'])->name('dine');
Route::get('/meeting', [UserController::class, 'meeting'])->name('meeting');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');
Route::get('/bookroom', [UserController::class, 'bookroom'])->name('bookroom');

//Hotel Room routes
Route::post('/search-rooms', [HomeController::class, 'searchRooms'])->name('search.rooms');
//KTV routes 
Route::get('/date-picker', [HomeController::class, 'showDatePicker'])->name('booking.date-picker');
Route::post('/available-rooms', [HomeController::class, 'showAvailableRooms'])->name('booking.available-rooms');
Route::post('/book-room/{room}', [HomeController::class, 'bookRoom'])->name('booking.book-room');
//Contact Form routes
Route::resource('contactform', ContactController::class);
Route::post('/contactstore', [ContactController::class, 'store'])->name('contactform');
Route::get('newsletteremail', [ContactController::class, 'newsletteremail'])->name('newsletter');
