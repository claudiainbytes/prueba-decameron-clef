<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoAcomodacion extends Model
{
    protected $table = "tipos_acomodacion";
    protected $primaryKey = "id";
    protected $fillable = ['tipo'];

    //One to many relationship: Tipo Acomodacion to Habitaciones Por Hotel
    public function habitaciones_por_hotel()
    {
        return $this->hasMany('App\HabitacionesPorHotel');
    }

}
