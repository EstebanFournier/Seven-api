<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user_category() {
        return $this->belongsTo(UserCategory::class);
    }

    public function companies() {
        return $this->belongsTo(Companies::class);
    }

    public function agencies() {
        return $this->belongsTo(Agencies::class);
    }

    public function is_seven_agent() {
        return $this->user_category->ref == "seven-agent";
    }

    public function is_seven_admin() {
        return $this->user_category->ref == "seven-admin";
    }

    public function is_seven_controller() {
        return $this->user_category->ref == "seven-controller";
    }

    public function is_client_admin() {
        return $this->user_category->ref == "client-admin";
    }

    public function is_client_booker() {
        return $this->user_category->ref == "client-booker";
    }
}
