<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create(['nombre_provincia' => 'Arica' , 'id_region' => '1']);
        Provincia::create(['nombre_provincia' => 'Parinacota' , 'id_region' => '1']);
        Provincia::create(['nombre_provincia' => 'Iquique' , 'id_region' => '2']);
        Provincia::create(['nombre_provincia' => 'El Tamarugal' , 'id_region' => '2']);
        Provincia::create(['nombre_provincia' => 'Antofagasta' , 'id_region' => '3']);
        Provincia::create(['nombre_provincia' => 'El Loa' , 'id_region' => '3']);
        Provincia::create(['nombre_provincia' => 'Tocopilla' , 'id_region' => '3']);
    }
}
