<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Room;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    // Obtener table por id
    public function get_table_by_id($id){
        $table = Table::findOrFail($id);
        if (!$table) {
            return response()->json(['message' => 'Table not found'], 404);
        }
        return response()->json(['table' => $table]);
    }


    // Obtener tablees de un restaurante
    public function get_tables_by_restaurant_id($restaurant_id){
        $tables = Table::where('restaurant_id', $restaurant_id)->get();
        return response()->json(['tables' => $tables]);
    }


    // Obtener tablees de un usuario
    public function get_tables_by_room_id($room_id){
        $room = Room::findOrFail($room_id);
        if (!$room) {
            return response()->json(['message' => 'Room not found'], 404);
        }
        $tables = Table::where('room_id', $room_id)->get();
        return response()->json(['tables' => $tables]);
    }


    //Crear table
    public function post_table(Request $request){
        $table = new Table();
        $table->room_id = $request->input('room_id');
        $table->restaurant_id = $request->input('restaurant_id');
        $table->status = 0;
        $table->save();

        $room = Room::find($request->input('room_id'));
        $room->tables_quantity += 1;
        $room->save();

        return response()->json(['message' => 'Table created successfully', 'cantidad de mesas' => $room->tables_quantity]);
    }


    public function update_table(Request $request, $id){
    // Buscar la tabla por su ID
    $table = Table::find($id);

    // Verificar si se encontró la mesa
    if (!$table) {
        return response()->json(['error' => 'Mesa no encontrada'], 404);
    }

    // Obtener los datos enviados en la petición
    $table->status = $request->input('status');
    $table->save();

    //Revisar las mesas de los restaurantes:
    $restaurant = Restaurant::find($table->restaurant_id);
    $tables = $restaurant->get_tables($restaurant->id);
    $control = false;
    foreach($tables as $table_){
        if($table_->status == 1){
            $control = true;
            break;
        }else{
            $control = false;
        }
    }

    if (!$control){
        $restaurant->status = 2;
        $restaurant->save();
    } else{
        $restaurant->status = 1;
        $restaurant->save();
    }

    // Responder con los datos actualizados
    return response()->json(['message' => 'Mesa actualizada', 'table' => $table, 'restaurant' => $restaurant]);
    }
    

    //Eliminar table
    public function delete_table($id){
        $table = Table::find($id);
    
    if ($table) {
        $room = Room::find($table->room_id); // Obtener el restaurante asociado a la tabla
        // Actualizar el campo quantity_tables en la tabla restaurants
        $room->tables_quantity -= 1; // Restar 1 al valor actual
        $room->save(); // Guardar los cambios
        $table->delete();
        return response()->json(['message' => 'Table deleted successfully','Room'=> $room]);
    } else {
        return response()->json(['message' => 'Table not found']);
        }
    }


}
