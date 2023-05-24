<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function get_reservation($id){
       return Reservation::find($id);
    }


    public function get_reservations_restaurant($id){
        return Reservation::where('restaurant_id', '=',$id)->get(); 
    }


    public function get_reservations_user($id){
        return Reservation::where('user_id', '=',$id)->get(); 
    }


    public function get_all_reservations(){
        return Reservation::get();
    }


    public function post_reservation(Request $request){
        $reservation = new Reservation();
        $reservation->user_id = $request->input('user_id');
        $reservation->restaurant_id = $request->input('restaurant_id');
        $reservation->table_id = $request->input('table_id');
        $reservation->status = 0;
        $reservation->num_people = $request->input('num_people');
        $reservation->date_reservation = $request->input('date_reservation');
        $reservation->save();

        return response()->json(['message' => 'Reservation created successfully']);
    }


    public function update_reservation(Request $request, $id){
        // Obtener la reserva por su id
        $reservation = Reservation::find($id);

        // Verificar si la reserva existe
        if (!$reservation) {
            return response()->json(['message' => 'Reservation not found'], 404);
        }

        // Actualizar los campos de la reserva
        $reservation->user_id = $request->input('user_id');
        $reservation->restaurant_id = $request->input('restaurant_id');
        $reservation->table_id = $request->input('table_id');
        $reservation->status = $request->input('status');
        $reservation->num_people = $request->input('num_people');
        $reservation->date_reservation = $request->input('date_reservation');
        
        // Validar el valor de status
        if ($reservation->status != 0 && $reservation->status != 1) {
            return response()->json(['message' => 'Invalid status value'], 400);
        }

        // Guardar la reserva actualizada
        $reservation->save();

        // Devolver una respuesta exitosa
        return response()->json(['message' => 'Reservation updated successfully']);
    }


    public function delete_reservation($id){
        $reservation = Reservation::find($id);
        if ($reservation) {
            $reservation->delete();
            return response()->json(['message' => 'Reservation deleted successfully']);
        } else {
            return response()->json(['message' => 'Reservation not found']);
        }
    }

}
