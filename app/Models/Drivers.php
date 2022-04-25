<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drivers extends Model
{
    use HasFactory;
    /**
     * The attributes tha are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $table = 'drivers';
    protected $fillable = [
        'lastName',
        'firstName',
        'street',
        'postalCode',
        'professionalEmail',
        'mobileNumber',
        'drivingLicenseNumber',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Companies::class, 'company_id');
    }
}
