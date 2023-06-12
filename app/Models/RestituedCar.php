<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestituedCar extends Model
{
    use HasFactory;
    protected $table = 'RestituedCar';
    protected $fillable = [
        'model',
        'licensePlate',
        'statusVehicle',
    ];
}
