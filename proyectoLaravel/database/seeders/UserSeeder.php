<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Restaurant;
use App\Models\Room;
use App\Models\Table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        function terraza($restaurant)
        {
            $room = Room::factory()->create([
                'name' => 'Terraza',
                'terrace' => true,
                'restaurant_id' => $restaurant->id,
            ]);
            $restaurant->get_room()->save($room);

            for ($i = 0; $i < $room->tables_quantity; $i++) {
                Table::factory()->create(['room_id' => $room->id, 'restaurant_id' => $restaurant->id]);
            }
        }

        function sala($restaurant)
        {
            $room = Room::factory()->create([
                'name' => 'Sala',
                'terrace' => false,
                'restaurant_id' => $restaurant->id,
            ]);
            $restaurant->get_room()->save($room);

            for ($i = 0; $i < $room->tables_quantity; $i++) {
                Table::factory()->create(['room_id' => $room->id, 'restaurant_id' => $restaurant->id]);
            }
        }
        // usuario hardcodeado para que no tengamos que ver
        // phpmyadmin cada vez que hacemos un redeploy
        User::factory()->create([
            'name'     => 'John Doe',
            'email'    => 'johndoe@example.com',
            'phone'    => '+34 123 456 789',
            'role'     => '0',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => Str::random(10)
        ]);
        $i =0;

        User::factory(20)->create()->each(function($u) use (&$i){ 
            if ($u->role == "0") {
                $json = File::get("database/data/restaurante.json");
                $data = json_decode($json,true);
                // $restaurant = Restaurant::factory()->make();
                if($i<count($data)){
                $restaurant = new Restaurant();
                $restaurant->name = $data[$i]['name'];
                $restaurant->terrace = $data[$i]['has_terrace'];
                $restaurant->description = $data[$i]['description'];
                $restaurant->type_food = $data[$i]['food_type'];
                $restaurant->score = $data[$i]['score'];
                $restaurant->avg_price = $data[$i]['avg_price'];
                $restaurant->url = $data[$i]['url'];
                $restaurant->phone = $data[$i]['phone'];
                $restaurant->img_profile = $data[$i]['profile_image'];
                $restaurant->img_gallery = $data[$i]['image_gallery_path'];
                $restaurant->city = $data[$i]['city'];
                $restaurant->address = $data[$i]['address'];
                $restaurant->longitude = $data[$i]['coordinates']['longitude'];
                $restaurant->latitude = $data[$i]['coordinates']['latitude'];
                $restaurant->status = 0;
                $i++;
            } else{
                $restaurant = Restaurant::factory()->make();
            }
                $u->get_restaurant()->save($restaurant);

                if ($restaurant->terrace) {
                    sala($restaurant);
                    terraza($restaurant);
                } else {
                    sala($restaurant);
                }
               
            }
        });
    }
}
