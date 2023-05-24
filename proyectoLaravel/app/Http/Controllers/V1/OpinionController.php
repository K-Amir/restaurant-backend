<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Opinion;
use Illuminate\Http\Request;

class OpinionController extends Controller
{
    // Obtener opinion por id
    public function get_opinion_by_id($id){
        $opinion = Opinion::findOrFail($id);
        return response()->json(['opinion' => $opinion]);
    }


    // Obtener opiniones de un restaurante
    public function get_opinions_by_restaurant_id($restaurant_id){
        $opinions = Opinion::where('restaurant_id', $restaurant_id)->get();
        return response()->json(['opinions' => $opinions]);
    }


    // Obtener opiniones de un usuario
    public function get_opinions_by_user_id($user_id){
        $opinions = Opinion::where('user_id', $user_id)->get();
        return response()->json(['opinions' => $opinions]);
    }


    //Crear opinion
    public function post_opinion(Request $request){
        $opinion = new Opinion();
        $opinion->restaurant_id = $request->input('restaurant_id');
        $opinion->user_id = $request->input('user_id');
        $opinion->comment = $request->input('comment');
        $opinion->score = $request->input('score');
        $opinion->creation_date = now();
        $opinion->save();

        return response()->json(['message' => 'Opinion created successfully']);
    }


    //Eliminar opinion
    public function delete_opinion($id){
        $opinion = Opinion::find($id);
        if ($opinion) {
            $opinion->delete();
            return response()->json(['message' => 'Opinion deleted successfully']);
        } else {
            return response()->json(['message' => 'Opinion not found']);
        }
    }


}
