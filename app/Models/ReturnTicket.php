<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReturnTicket extends Model
{
    use HasFactory;
    protected $table = 'return_ticket';
    protected $fillable = [
        'userCreator_id',
        'vehicleModel',
        'vehicleMatriculation',
        'booking_id',
        'mileage',
        'dateHourControl',
        'aileAVG',
        'aileARG',
        'calandre',
        'phareAVD',
        'siegePass',
        'porteAVG',
        'aileAVG',
        'aileARD',
        'phareAVG',
        'siegeCond',
        'tdb',
        'porteAVD',
        'observation',
    ];
}
