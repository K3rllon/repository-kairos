<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Artist;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $artists = Artist::all();
        return view('dashboard', compact('events','artists'));
    }
}
