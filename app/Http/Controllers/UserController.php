<?php

namespace App\Http\Controllers;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function rooms()
    {
        return view('rooms');
    }

    public function dine()
    {
        return view('dine');
    }

    public function meeting()
    {
        return view('meeting');
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function bookroom()
    {
        return view('book-room');
    }
}
