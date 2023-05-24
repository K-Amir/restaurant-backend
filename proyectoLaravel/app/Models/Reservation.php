<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = ['status', 'num_plp'];

    protected $hidden = [];

    public function get_reservations_restaurant($id_restaurant){
        return Reservation::where('restaurant_id', '=',$id_restaurant)->get(); 
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function get_restaurant(){
        return $this->belongsTo(Restaurant::class);
    }

    public function get_table(){
        return $this->belongsTo(Table::class);
    }

}
