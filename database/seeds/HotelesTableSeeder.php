<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Hotel as Hotel;

class HotelesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create(['nombre' => 'Decameron San Luis',
                       'ciudad_id' => '1',
                       'nit' => '11.111.111-1',
                       'direccion' => 'Av. Siempreviva 123',
                       'total_habitaciones' => 88,
                       'foto' => 'decameron-san-luis.jpeg'
                      ]);
        Hotel::create(['nombre' => 'Decameron Maryland',
                        'ciudad_id' => '1',
                        'nit' => '11.111.111-2',
                        'direccion' => 'Av. Siempreviva 124',
                        'total_habitaciones' => 50,
                        'foto' => 'decameron-maryland.jpeg'
        ]);
        Hotel::create(['nombre' => 'Decameron Galeón',
                        'ciudad_id' => '2',
                        'nit' => '22.222.222-1',
                        'direccion' => 'Autopista 123',
                        'total_habitaciones' => 100,
                        'foto' => 'decameron-galeon.jpeg'
        ]);
        Hotel::create(['nombre' => 'Decameron Barú',
                        'ciudad_id' => '3',
                        'nit' => '33.333.333-1',
                        'direccion' => 'Isla de Barú',
                        'total_habitaciones' => 65,
                        'foto' => 'decameron-baru.jpeg'
        ]);
        Hotel::create(['nombre' => 'Decameron Cartagena',
                        'ciudad_id' => '3',
                        'nit' => '33.333.333-1',
                        'direccion' => 'Carrera 1A # 10 -10, Bocagrande',
                        'total_habitaciones' => 80,
                        'foto' => 'decameron-baru.jpeg'
        ]);
    }
}

