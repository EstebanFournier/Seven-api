<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table ='user_categories';
    protected $fillable = [
        'label',
        'ref',
    ];

    public function user(){
        return $this->hasMany(User::class);
    }

    /**
     *
     */
    /*static public function client_admin() {
        return UserCategory::where("ref", "client-admin")->get()[0];
    }

    static public function seven_admin() {
        return UserCategory::where("ref", "seven-admin")->get()[0];
    }

    static public function client_booker() {
        //return UserCategory::where("ref", "client-booker")->get()[0];
        return UserCategory::class;
    }

    static public function seven_agent() {
        return UserCategory::where("ref", "seven-agent")->get()[0];
    }

    static public function seven_controller() {
        return UserCategory::where("ref", "seven-controller")->get()[0];
    }*/
}
