<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\HotelRoom;

class Hotel extends Model
{
    protected $fillable = ['nombre','direccion','ciudad','nit','numero_habitaciones'];
    public function hotelroom() {
        return $this->hasMany(HotelRoom::class);
    }
}