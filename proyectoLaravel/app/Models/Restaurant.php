<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'phone', 'address','city', 'terrace', 'score', 'avg_price', 'type_food','url','img_profile','img_gallery','description','latitude', 'longitude','user_id','status'];

    protected $hidden = [];

    protected $cast = [
        'terrace' => 'boolean',
        'score' => 'float',
        'avg_price' => 'float',
        'latitude' => 'double',
        'longitude' => 'double'
    ]; 

    public function get_restaurants(){
        return Restaurant::all();
    }

    public function get_Restaurant_by_id($id){
        return Restaurant::find($id);
    }

    public function get_restaurant($id){
        return Restaurant::where('user_id', '=',$id)->get(); 
    }

    public function get_reservations_from_restaurant($id){
        return Reservation::where('restaurant_id', '=',$id)->get(); 
    }

    public function get_rooms($id){
        return Room::where('restaurant_id', '=',$id)->get(); 
    }

    public function get_tables($id){
        return Table::where('restaurant_id', '=',$id)->get(); 
    }

    public function get_user(){
        return $this->belongsTo(User::class);
    }

    public function get_opinions(){
        return $this->hasMany(Opinion::class);
    }

    public function get_reservation(){
        return $this->hasMany(Reservation::class);
    }

    public function get_room(){
        return $this->hasMany(Room::class);
    }
}
