<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Facades\JWTAuth as FacadesJWTAuth;
use Tymon\JWTAuth\Exceptions\JWTException as ExceptionsJWTException;



class UserController extends Controller
{
    // public function get_User(Request $request)
    // {
    //     //Validamos que la request tenga el token
    //     $this->validate($request, [
    //         'token' => 'required'
    //     ]);
    //     //Realizamos la autentificación
    //     $user = FacadesJWTAuth::authenticate($request->token);
    //     //Si no hay usuario es que el token no es valido o que ha expirado
    //     if(!$user)
    //         return response()->json([
    //             'message' => 'Invalid token / token expired',
    //         ], 401);
    //     //Devolvemos los datos del usuario si todo va bien. 
    //     return response()->json(['user' => $user]);
    // }

    public function get_user($id){
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }
        return User::find($id);
    }

    public function get_users(){
        return User::all();
    }

    public function create_user(Request $request)
    {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    public function update_user(Request $request, $id)
    {
        // Obtener la reserva por su id
        $user = User::find($id);

        // Verificar si la reserva existe
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        // Actualizar los campos de la reserva
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->role = $request->input('role');
        $user->phone = $request->input('phone');
        
        // Validar el valor de role
        if ($user->role !="0" && $user->role != "10") {
            return response()->json(['message' => 'Invalid role value' ,'role' => $user->role], 400);
        }

        // Guardar el usuario actualizado
        $user->save();

        // Devolver una respuesta exitosa
        return response()->json(['message' => 'User updated successfully']);
    }

    public function delete_user($id)
    {
        $user = User::find($id);
        if ($user) {
            $user->delete();
            return response()->json(['message' => 'User deleted successfully']);
        } else {
            return response()->json(['message' => 'User not found']);
        }
    }
}
