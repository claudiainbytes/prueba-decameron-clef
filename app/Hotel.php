<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $table = "hoteles";
    protected $primaryKey = "id";
    protected $fillable = ['nombre','ciudad_id','nit','direccion','total_habitaciones','foto'];

    //Has to many relationship: Hoteles a Ciudades
    public function ciudad()
    {
        return $this->belongsTo('App\Ciudad');
    }
}
