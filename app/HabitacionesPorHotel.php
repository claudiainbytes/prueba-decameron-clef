<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HabitacionesPorHotel extends Model
{
    protected $table = "habitaciones_hotel";
    protected $primaryKey = "id";
    protected $fillable = ['hotel_id','tipo_habitacion_id','tipo_acomodacion_id','total_habitaciones'];

    //Has to many relationship: HabitacionesPorHotel a Hoteles
    public function hoteles()
    {
        return $this->belongsTo('App\Hotel');
    }

    //Has to many relationship: HabitacionesPorHotel a Tipos Habitacion
    public function tipos_habitacion()
    {
        return $this->belongsTo('App\TipoHabitacion');
    }

    //Has to many relationship: HabitacionesPorHotel a Tipos Acomodacion
    public function tipos_acomodacion()
    {
        return $this->belongsTo('App\TipoAcomodacion');
    }
}
