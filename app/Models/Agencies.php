<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agencies extends Model
{
    use HasFactory;

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'agency_id');
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicles::class, 'agency_id');
    }
}
