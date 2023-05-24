<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Opinion extends Model
{
    use HasFactory;

    protected $fillable =['comment','score'];

    protected $hidden = [''];

    public function get_opinions_restaurant($id_restaurant){
        return Opinion::where('restaurant_id', '=',$id_restaurant)->get(); 
    }

    public function get_user(){
        return $this->belongsTo(User::class);
    }

    public function get_restaurant(){
        return $this->belongsTo(Restaurant::class);
    }
}
