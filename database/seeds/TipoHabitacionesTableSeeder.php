<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TipoHabitacion as TipoHabitacion;

class TipoHabitacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoHabitacion::create(['tipo' => 'Estándar']);
        TipoHabitacion::create(['tipo' => 'Junior']);
        TipoHabitacion::create(['tipo' => 'Suite']);
    }
}
