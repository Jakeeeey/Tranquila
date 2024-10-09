<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/test', function(){
   return view('test');
});

Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('/rooms', [UserController::class, 'rooms'])->name('rooms');
Route::get('/dine', [UserController::class, 'dine'])->name('dine');
Route::get('/meeting', [UserController::class, 'meeting'])->name('meeting');
Route::get('/contact', [UserController::class, 'contact'])->name('contact');

//Contact Form routes
Route::resource('contactform', ContactController::class);
Route::post('/contactstore', [ContactController::class, 'store'])->name('contactform');
Route::get('newsletteremail', [ContactController::class, 'newsletteremail'])->name('newsletter');

