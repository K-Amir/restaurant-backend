<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Obtener saka por id
    public function get_room_by_id($id){
        $room = Room::findOrFail($id);
        return response()->json(['room' => $room]);
    }


    // Obtener salas de un restaurante
    public function get_rooms_by_restaurant_id($restaurant_id){
        $rooms = Room::where('restaurant_id', $restaurant_id)->get();
        return response()->json(['rooms' => $rooms]);
    }


    //Obtener listado con todos los restaurantes
    public function get_all_rooms(){
        return Room::get();
    }


    //Crear sala
    public function post_room(Request $request){
        Room::create($request->all());
        return response()->json(['message' => 'Room created successfully']);
    }


    public function update_room(Request $request, $id){
        // Buscar la tabla por su ID
        $room = Room::find($id);

        // Verificar si se encontró la mesa
        if (!$room) {
            return response()->json(['error' => 'Sala no encontrada'], 404);
        }

        $room->name = $request->input('name');
        $room->restaurant_id = $request->input('restaurant_id');
        $room->tables_quantity = $request->input('tables_quantity');
        $room->status = $request->input('status');
        $room->terrace = $request->input('terrace');
        $room->save();

        // Responder con los datos actualizados
        return response()->json(['message' => 'Sala actualizada', 'room' => $room]);
    }


    //Eliminar sala
    public function delete_room($id){
        $room = Room::find($id);
        if ($room) {
            $room->delete();
            return response()->json(['message' => 'Room deleted successfully']);
        } else {
            return response()->json(['message' => 'Room not found']);
        }
    }

}
