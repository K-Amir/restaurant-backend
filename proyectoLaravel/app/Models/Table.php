<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;

    protected $hidden = [];

    //The attributes that should be cast.
    protected $casts = [
        'status' => 'integer',
    ];

    // public function get_restaurant($restaurant_id){
    //     return Restaurant::where('id', '=',$restaurant_id)->get(); 
    // }

    public function get_room_by_id($id){
        return Room::where('id', '=',$id)->get(); 
    }

    public function get_restaurant_by_id($id){
        return Restaurant::where('id', '=',$id)->get(); 
    }

    public function get_table($id){
        return Table::find($id);
    }

    public function get_room(){
        return $this->belongsTo(Room::class);
    }
    public function get_restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
