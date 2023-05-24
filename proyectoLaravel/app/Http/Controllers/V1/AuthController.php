<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use App\Models\Room;
use App\Models\Table;
use Illuminate\Http\Request;
use JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Excepetions\JWTException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Validator;
use Tymon\JWTAuth\Exceptions\JWTException as ExceptionsJWTException;
use Tymon\JWTAuth\Facades\JWTAuth as FacadesJWTAuth;


class AuthController extends Controller
{
   //Función que utilizaremos para hacer login
   public function authenticate(Request $request){
        //Indicamos los parámetros que queremos recibir de la request
        $credentials = $request->only('email', 'password');


        //Validación
        $validator = Validator::make($credentials, [
            'email' => 'required|email',
            'password' => 'required|string|min:6|max:50',
        ]);

        //Si la validación falla, devolvemos un error
        if($validator->fails()){
            return response()->json(['error' => $validator->messages()], 400);
        }

        // Verificar el campo 'role' del usuario antes de hacer login
        $user = User::where('email', $credentials['email'])->first();
        // if ($user && $user->role !== '0') {
        //     return response()->json(['error' => 'Unauthorized'], 401);
        // }

        //Intentamos hacer login
        try{
            if(!$token = FacadesJWTAuth::attempt($credentials)){
                //Credenciales incorrectas
                return response()->json(['error' => 'Login failed'], 401);
            }
        }catch (ExceptionsJWTException $e){
            //Error chungo
            return response()->json([
                'message' => 'Error',
            ], 500);
        }

        $restaurant = Restaurant::find($user->id);
        $restaurant->status = 1;
        $restaurant->save();

        //Devolver el token
        return response()->json([
            'token' => $token,
            'user' => Auth::user(),
            'restaurant' => $restaurant
        ]);
    }


    public function register(Request $request){
        //Indicamos los parametros que queremos recibir del Request
        $data = $request->only ('name','email','password');

        //Validación
        $validator = Validator::make($data,[
            'name' => 'required|String',
            'email'=> 'required|email|unique:users',
            'password' => 'required|string|min:6|max:50',
        ], [
            'email.unique' => 'El email ya está siendo utilizado por otro usuario.'
        ]);

        //Devolver un error si falla la validación
        if ($validator->fails()){
            return response()->json(['error' => $validator->messages()], 400);
        }

        //Crear el usuario
        $user = User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'password'=>bcrypt($request->password)
        ]);

        //Nos quedamos con el usuario y contraseña para hacer la peticion de token al JWTAuth
        $credentials = $request->only('email','password');

        return response()->json([
            'message' => 'user created',
            'token' => FacadesJWTAuth::attempt($credentials),
            'user' => $user
        ],Response::HTTP_OK);
    }


   //Funcion que elimina el token y desconecta al usuario
   public function logout(Request $request){
        //Valida que nos envia un token
        $validator = Validator::make($request->only('token'),[
            'token' => 'required'
        ]);

        //Fallo de validación
        if($validator->fails()){
            return response()->json(["error" => $validator->messages()], 400);
        }
        //Si el token es válido, eliminamos el token desconectando al usuario
        try{
            $restaurant = Restaurant::find(Auth::user()->id);
            $tables = $restaurant->get_tables($restaurant->id);

            //TODO: No se actualiza el estado de las mesas
            foreach($tables as $mesa){
                $table = Table::find($mesa->id);
                $table->status = 0;
                $table->save();
            }
            $restaurant->status = 0;
            $restaurant->save();

            FacadesJWTAuth::invalidate([$request->token]);
            return response()->json([
                'success' => true,
                'message' => "user disconected",
                'restaurant' => $restaurant,
                'tables' => $restaurant->get_tables($restaurant->id)
            ]);
        }catch(ExceptionsJWTException $e){
            return response()->json([
                'success' => false,
                'message' => "Error",
                Response:: HTTP_INTERNAL_SERVER_ERROR
            ]);
        }
    }
   
}
