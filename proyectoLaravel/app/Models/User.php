<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements JWTSubject
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'role',
        'password',
        'phone',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function get_users(){
        return User::all();
    }

    public function get_user_by_id(){
        return User::find('id');
    }

    public function get_restaurant_user($id){
        return Restaurant::where('user_id', '=', $id)->get(); 
    }

    public function get_users_restaurants(){
        return User::where('role', '=', 0)->get(); 
    }
    
    public function get_reservations(){
        return $this->haMany(Reservation::class);
    }

    public function get_opinions(){
        return $this->hasMany(Opinion::class);
    }

    public function get_restaurant(){
        return $this->hasOne(Restaurant::class);
    }

    public function getJWTIdentifier(){
        return $this->getKey();
    }
    public function getJWTCustomClaims()   {
        return [];
    }

}
