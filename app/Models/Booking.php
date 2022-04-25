<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    /**
     * The attributes tha are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $table = 'booking';
    protected $fillable = [
        'booker_id',
        'vehicle_id',
        'drivers_id',
        'ticket_id',
        'agency_id',
        'journey_trip_id',
    ];

    public function agencies()
    {
        return $this->belongsTo(Agencies::class, 'agency_id');
    }

    public function drivers()
    {
        return $this->belongsTo(Drivers::class, 'drivers_id');
    }
}
