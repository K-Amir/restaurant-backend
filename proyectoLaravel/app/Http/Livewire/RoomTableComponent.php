<?php

namespace App\Http\Livewire;

use App\Models\Restaurant;
use Livewire\Component;
use App\Models\Room;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;

class RoomTableComponent extends Component
{
    public $id_room;

    public function add_table($room){
        $table = new Table();
        $table->room_id = $room->id;
        $table->restaurant_id =$room->restaurant_id;
        $table->status = 0;
        $table->save();
    }

    public function render()
    {
        $restaurant = Restaurant::where('user_id', '=' , Auth::user()->id)->get();

         // Obtener salas de la base de datos
         $rooms = Room::where('restaurant_id', '=' , $restaurant[0]['id'])->get();

         // Obtener mesas de todas las salas
         foreach ($rooms as $room) {
             $tables_restaurant = Table::where('room_id', $room->id)->get();
             $tables[$room->id] = $tables_restaurant;
         }

        return view('livewire.room-table-component')->with(
            ['tables'=>$tables,
            'rooms'=>$rooms
            ]);
    }
}
