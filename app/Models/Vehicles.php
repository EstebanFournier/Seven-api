<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Agencies;

class Vehicles extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable = [
        'immatriculation',
        'brand',
        'model',
        'agency_id',
        'status'
    ];


    public function booking() {
        return $this->hasMany(Booking::class);
    }

    /*public function agencies() {
        return $this->belongsTo(Agencies::class, 'agency_id');
    }*/

    public function withdrawalTicket(){
        return $this->belongsTo(WithdrawalTicket::class);
    }
}
