<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\TipoAcomodacion as TipoAcomodacion;

class TipoAcomodacionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoAcomodacion::create(['tipo' => 'Sencilla']);
        TipoAcomodacion::create(['tipo' => 'Doble']);
        TipoAcomodacion::create(['tipo' => 'Triple']);
        TipoAcomodacion::create(['tipo' => 'Cuadruple']);
    }
}
