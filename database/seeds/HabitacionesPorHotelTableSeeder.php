<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\HabitacionesPorHotel as HabitacionesPorHotel;

class HabitacionesPorHotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HabitacionesPorHotel::create(['hotel_id' => 1,
                                      'tipo_habitacion_id' => 1,
                                      'tipo_acomodacion_id' => 1,
                                      'total_habitaciones' => 25,
        ]);
        HabitacionesPorHotel::create(['hotel_id' => 1,
                                      'tipo_habitacion_id' => 1,
                                      'tipo_acomodacion_id' => 2,
                                      'total_habitaciones' => 10,
        ]);
        HabitacionesPorHotel::create(['hotel_id' => 1,
                                      'tipo_habitacion_id' => 2,
                                      'tipo_acomodacion_id' => 3,
                                      'total_habitaciones' => 25,
        ]);
        HabitacionesPorHotel::create(['hotel_id' => 1,
                                      'tipo_habitacion_id' => 2,
                                      'tipo_acomodacion_id' => 4,
                                      'total_habitaciones' => 25,
        ]);
        HabitacionesPorHotel::create(['hotel_id' => 1,
                                      'tipo_habitacion_id' => 3,
                                      'tipo_acomodacion_id' => 1,
                                      'total_habitaciones' => 5,
        ]);
        HabitacionesPorHotel::create(['hotel_id' => 1,
                                      'tipo_habitacion_id' => 3,
                                      'tipo_acomodacion_id' => 2,
                                      'total_habitaciones' => 5,
        ]);
        HabitacionesPorHotel::create(['hotel_id' => 1,
                                      'tipo_habitacion_id' => 3,
                                      'tipo_acomodacion_id' => 3,
                                      'total_habitaciones' => 5,
        ]);
    }
}


