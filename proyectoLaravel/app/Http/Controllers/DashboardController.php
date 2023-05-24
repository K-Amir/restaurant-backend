<?php
namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\Room;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function index()
    {
        //Usuario logueado
        $user = Auth::user();
       
        //Obtener datos del restaurante del usuario logueado
        function get_restaurant($id){
            $restaurant = new Restaurant;
            $restauranData = $restaurant->get_restaurant($id);
            return $restauranData;
        }
        $restaurantJSON =  get_restaurant($user->id);
        $restaurant = json_decode($restaurantJSON)[0];

        /* Salas*/
        function get_rooms($id){
            $restaurant = new Restaurant;
            $roomData = $restaurant->get_rooms($id);
            return $roomData;
        }
        
        // Array de las salas en formato json
        $rooms = get_rooms($restaurant->id);

        //Obtener mesas de las salas del restaurante
        function get_tables($rooms){
            $room = new Room;
            $tablesRestaurant=[];
            foreach($rooms as $room_){
                $tablesRoom = $room->get_tables($room_->id);
                array_push($tablesRestaurant, $tablesRoom);
            }
            return $tablesRestaurant;
        }
        //Array de las mesas de las salas del restaurante en formato json
        $tablesRestaurant = get_tables($rooms);

        //Reservas
        function get_reservatios_from_restaurant($id){
            $restaurant = new Restaurant;
            $reservationsData = $restaurant->get_reservations_from_restaurant($id);
            return $reservationsData;
        }
        
        // Array de las salas en formato json
        $reservationsTotal = get_reservatios_from_restaurant($restaurant->id);
        $reservationsArray = $reservationsTotal->toArray();
        
        $date = date('Y-m-d'); // fecha actual en formato yyyy-mm-dd
        $time = date('H:i:s'); // hora actual en formato hh:mm:ss
        $time10Before = date('H:i:s', strtotime('-10 minutes', strtotime($time))); // hora actual menos 30 minutos en formato hh:mm:ss
        $time30After = date('H:i:s', strtotime('+30 minutes', strtotime($time))); // hora actual más 30 minutos en formato hh:mm:ss
        
        $reservationsFiltered = array_filter($reservationsArray, function ($reservation) use ($date,$time, $time10Before, $time30After) {
            list($fecha, $hora) = explode(" ",$reservation['date_reservation']);
            // print($fecha."<br>");
            // print($hora."<br>");
            // print($date."<br>");
            // print($time."<br>");
            // print($time10Before."<br>");
            // print($time30After."<br>");
            return ($fecha == $date && $hora >= $time10Before && $hora <= $time30After);
            //TODO -> Si la hora es por ejemplo 23:
        });
        
        /* Actual */
        $jsonReservas = file_get_contents(base_path('Json Provisional/reserva.json'));
        $dataReservas = json_decode($jsonReservas, true);

        return view('dashboard', compact('user', 'dataReservas','restaurant','rooms','tablesRestaurant','reservationsTotal','reservationsFiltered','date','time'));
        /********************* */

      
    }

}