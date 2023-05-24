<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestaurantController extends Controller
{
    //Obtener listado con todos los restaurantes
    public function get_all_restaurants(){
        return Restaurant::get();
    }


    // Obtener el restaurante del usuario logeado
    public function get_restaurant(){
        $restaurant = new Restaurant();
        return $restaurant->get_restaurant(Auth::user()->id);
    }


    // Obtener el restaurante del usuario logeado
    public function get_restaurant_by_id($id){
        $restaurant = Restaurant::find($id);
        if (!$restaurant) {
        return response()->json(['message' => 'Restaurant not found'], 404);
        }
        return $restaurant->get_restaurant_by_id($id);
    }

    public function get_rooms_restaurant($id){
        $restaurant = Restaurant::find($id);
        if (!$restaurant) {
        return response()->json(['message' => 'Restaurant not found'], 404);
        }
        return $restaurant->get_restaurant_by_id($id);
    }


    public function create_restaurant(Request $request){
        $restaurant = Restaurant::create($request->all());
        return response()->json($restaurant, 201);
    }


    public function update_restaurant(Request $request, $id){
        // Obtener la reserva por su id
        $restaurant = Restaurant::find($id);

        // Verificar si la reserva existe
        if (!$restaurant) {
            return response()->json(['message' => 'Restaurant not found'], 404);
        }

        // Actualizar los campos de la reserva
        $restaurant->name = $request->input('name');
        $restaurant->phone = $request->input('phone');
        $restaurant->address = $request->input('address');
        $restaurant->city = $request->input('city');
        $restaurant->terrace = $request->input('terrace');
        $restaurant->score = $request->input('score');
        $restaurant->avg_price = $request->input('avg_price');
        $restaurant->type_food = $request->input('type_food');
        $restaurant->url = $request->input('url');
        $restaurant->img_profile = $request->input('img_profile');
        $restaurant->img_gallery = $request->input('img_gallery');
        $restaurant->description = $request->input('description');
        $restaurant->latitude = $request->input('latitude');
        $restaurant->longitude = $request->input('longitude');

        // Guardar el restaurante actualizado
        $restaurant->save();

        // Devolver una respuesta exitosa
        return response()->json(['message' => 'Restaurant updated successfully']);
    }


    public function delete_restaurant($id){
        $restaurant = Restaurant::find($id);
        if ($restaurant) {
            $restaurant->delete();
            return response()->json(['message' => 'Restaurant deleted successfully']);
        } else {
            return response()->json(['message' => 'Restaurant not found']);
        }
    }

}
