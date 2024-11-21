<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Hotel;

class HotelRoom extends Model
{
    protected $fillable = ['hotel_id','cantidad','tipo_habitacion','acomodacion'];

    public function hotel() {
        return $this->belongsTo(Hotel::class);
    }
}