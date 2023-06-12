<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    /**
     * The attributes tha are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'companies';
    protected $fillable = [
        'name',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

}
