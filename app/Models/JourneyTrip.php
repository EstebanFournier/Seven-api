<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JourneyTrip extends Model
{
    use HasFactory;
    protected $table = 'journey_trip';
    protected $fillable = [
        'type',
        'cityStart',
        'cityEnd',
        'dateStart',
        'dateEnd',
        'nbPassenger',
    ];
}
