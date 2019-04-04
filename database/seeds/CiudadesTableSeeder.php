<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Ciudad as Ciudad;

class CiudadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create(['ciudad' => 'San Andrés']);
        Ciudad::create(['ciudad' => 'Santa Marta']);
        Ciudad::create(['ciudad' => 'Cartagena']);
    }
}
