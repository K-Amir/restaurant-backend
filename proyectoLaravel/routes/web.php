<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\AuthController;
use App\Http\Controllers\V1\OpinionController;
use App\Http\Controllers\V1\RestaurantController;
use App\Http\Controllers\V1\ReservationController;
use App\Http\Controllers\V1\UserController;
use App\Http\Controllers\V1\TableController;
use App\Http\Controllers\V1\RoomController;

Route::prefix('v1')->group(function () {
    //Todo lo que haya en este grupo se accederá escribiendo ~/api/v1/*
    Route::post('login', [AuthController::class, 'authenticate']);
    Route::post('register', [AuthController::class, 'register']);
    // Route::post('registerUserRestaurant', [AuthController::class, 'registerUserRestaurant']);

    Route::group(['middleware' => ['jwt.verify']], function () {
        //Todo lo que haya en este grupo requiere autenticación de usuario
        Route::post('logout', [AuthController::class, 'logout']);
        /*******************************************************/
        Route::get('get_all_restaurants', [RestaurantController::class, 'get_all_restaurants']);
        Route::get('restaurant', [RestaurantController::class, 'get_restaurant']);
        Route::get('restaurant/{id}', [RestaurantController::class, 'get_restaurant_by_id']);
        Route::post('create_restaurant', [RestaurantController::class, 'create_restaurant']);
        Route::put('update_restaurant/{id}', [RestaurantController::class, 'update_restaurant']);
        Route::delete('delete_restaurant/{id}', [RestaurantController::class, 'delete_restaurant']);
        /*******************************************************/
        Route::get('reservation/{id}', [ReservationController::class, 'get_reservation']);
        Route::get('reservations', [ReservationController::class, 'get_all_reservations']);
        Route::get('reservations_restaurant/{id}', [ReservationController::class, 'get_reservations_restaurant']);
        Route::get('reservations_user/{id}', [ReservationController::class, 'get_reservations_user']);
        Route::post('reservation', [ReservationController::class, 'post_reservation']);
        Route::put('update_reservation/{id}', [ReservationController::class, 'update_reservation']);
        Route::delete('delete_reservation/{id}', [ReservationController::class, 'delete_reservation']);
        /******************************************************/
        Route::get('opinion/{id}', [OpinionController::class, 'get_opinion_by_id']);
        Route::get('opinions_restaurant/{id}', [OpinionController::class, 'get_opinions_by_restaurant_id']);
        Route::get('opinions_user/{id}', [OpinionController::class, 'get_opinions_by_user_id']);
        Route::post('opinion', [OpinionController::class, 'post_opinion']);
        Route::delete('delete_opinion/{id}', [OpinionController::class, 'delete_opinion']);
        /*******************************************************/
        Route::get('user/{id}', [UserController::class, 'get_user']);
        Route::get('users', [UserController::class, 'get_Users']);
        Route::post('create_user', [UserController::class, 'create_user']);
        Route::put('update_user/{id}', [UserController::class, 'update_user']);
        Route::delete('delete_user/{id}', [UserController::class, 'delete_user']);
        /******************************************************/
        Route::get('table/{id}', [TableController::class, 'get_table_by_id']);
        Route::get('tables_restaurant/{id}', [TableController::class, 'get_tables_by_restaurant_id']);
        Route::get('tables_room/{id}', [TableController::class, 'get_tables_by_room_id']);
        Route::post('table', [TableController::class, 'post_table']);
        Route::put('update_table/{id}', [TableController::class, 'update_table']);
        Route::delete('delete_table/{id}', [TableController::class, 'delete_table']);
        /******************************************************/
        Route::get('room/{id}', [RoomController::class, 'get_room_by_id']);
        Route::get('rooms_restaurant/{id}', [RoomController::class, 'get_rooms_by_restaurant_id']);
        Route::get('rooms', [RoomController::class, 'get_all_rooms']);
        Route::post('room', [RoomController::class, 'post_room']);
        Route::put('update_room/{id}', [RoomController::class, 'update_room']);
        Route::delete('delete_room/{id}', [RoomController::class, 'delete_room']);
    });
});

Route::middleware('guest')->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/login', function () {
        return view('auth.login');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    Route::get('/reservas', function () {
        return view('reservas');
    })->name('reservas');
});


Route::get('/aws-migrate', function () {
    Artisan::call('optimize:clear');
    Artisan::call('migrate:fresh --seed');

    return 'Migrado correctamente';
});


require __DIR__ . '/auth.php';
