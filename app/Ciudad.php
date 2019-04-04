<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = "ciudades";
    protected $primaryKey = "id";
    protected $fillable = ['ciudad'];

    //One to many relationship: Ciudad to Hoteles
    public function hoteles()
    {
        return $this->hasMany('App\Hotel');
    }

}
