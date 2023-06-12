<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WithdrawalTicket extends Model
{
    use HasFactory;
    protected $table = 'withdrawal_ticket';
    protected $fillable = [
        'userCreator_id',
        'vehicleModel',
        'vehicleMatriculation',
        'booking_id',
        'mileage',//<-
        'dateHourControl',//<-
        'aileAVG',
        'aileARG',
        'calandre',
        'phareAVD',
        'siegePass',
        'porteAVG',
        'aileAVD',
        'aileARD',
        'phareAVG',
        'siegeCond',
        'tdb',
        'porteAVD',
        'observation',//<-
    ];

    public function vehicle(){
        return $this->belongsTo(Vehicles::class);
    }
}
