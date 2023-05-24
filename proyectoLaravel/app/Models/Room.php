<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'tables_quantity', 'status', 'terrace', 'restaurant_id'];

    protected $hidden = [];

    // public function get_restaurant($restaurant_id){
    //     return Restaurant::where('id', '=',$restaurant_id)->get();
    // }

    public function get_tables($room_id)
    {
        return Table::where('room_id', '=', $room_id)->get();
    }

    public function get_room_by_id()
    {
        return Room::find('id');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function tables()
    {
        return $this->hasMany(table::class);
    }
}
