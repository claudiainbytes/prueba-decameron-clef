<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHabitacion extends Model
{
    protected $table = "tipos_habitacion";
    protected $primaryKey = "id";
    protected $fillable = ['tipo'];

    //One to many relationship: Tipo Habitacion to Habitaciones Por Hotel
    public function habitaciones_por_hotel()
    {
        return $this->hasMany('App\HabitacionesPorHotel');
    }

}
