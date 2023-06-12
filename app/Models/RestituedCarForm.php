<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestituedCarForm extends Model
{
    use HasFactory;
    protected $table = 'RestituedCarForm';
    protected $fillable = [
        'mileage',
        'date',
        'frontLeftWing',
        'frontRightWing',
        'leftRearWing',
        'rightRearWing',
        'radiator',
        'frontLeftLightHouse',
        'frontRightLightHouse',
        'seat',
        'passengerSeat',
        'dashboard',
        'frontLeftDoor',
        'frontRightDoor',
        'leftRearDoor',
        'rightRearDoor',
        'observations',
    ];
}
