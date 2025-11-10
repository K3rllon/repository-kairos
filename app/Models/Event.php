<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['title', 'description', 'start_date', 'end_date', 'start_time', 'end_time', 'location', 'address', 'image', 'organizer', 'event_type', 'capacity', 'price', 'status', 'registration_link', 'contact', 'slug'];
}
