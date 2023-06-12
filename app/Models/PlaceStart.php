<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlaceStart extends Model
{
    use HasFactory;
    protected $table = 'placeStart';
    protected $fillable = [
        'name',
        'address',
        'postalCode',
        'city',
    ];

    public function booking(){
        return $this->hasMany(Booking::class);
    }
}
