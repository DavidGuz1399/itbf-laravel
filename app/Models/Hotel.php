<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['nombre','direccion','ciudad','nit','numero_habitaciones'];
}