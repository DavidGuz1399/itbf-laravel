<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HotelRoom;

class Hotel extends Model
{
    protected $fillable = ['nombre','direccion','ciudad','nit','numero_habitaciones'];
    //Relacion con hotel_rooms
    public function hotelroom() {
        return $this->hasMany(HotelRoom::class);
    }
}