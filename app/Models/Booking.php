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
        'number',
        'date',
        'dateStart',
        'dateEnd',
        'halfDayStart',
        'halfDayEnd',
        'status',
        'driver_id',
        'vehicle_id',
        'placeStart_id',
        'placeEnd_id',
    ];

    public function booking_driver(){
        return $this->belongsTo(Drivers::class);
    }
    public function booking_vehicle(){
        return $this->belongsTo(Vehicles::class);
    }
    public function booking_placeStart(){
        return $this->belongsTo(PlaceStart::class);
    }
    public function booking_placeEnd(){
        return $this->belongsTo(PlaceEnd::class);
    }

    /*public function agencies()
    {
        return $this->belongsTo(Agencies::class, 'agency_id');
    }

    public function drivers()
    {
        return $this->belongsTo(Drivers::class, 'drivers_id');
    }*/
}
