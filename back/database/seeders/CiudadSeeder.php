<?php

namespace Database\Seeders;

use App\Models\Ciudad;
use Illuminate\Database\Seeder;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ciudad::create(['nombre_ciudad' => 'Arica' , 'id_provincia' => '1']);
        Ciudad::create(['nombre_ciudad' => 'Camarones' , 'id_provincia' => '1']);
        Ciudad::create(['nombre_ciudad' => 'General Lagos' , 'id_provincia' => '2']);
        Ciudad::create(['nombre_ciudad' => 'Putre' , 'id_provincia' => '2']);
        Ciudad::create(['nombre_ciudad' => 'Alto Hospicio' , 'id_provincia' => '3']);
        Ciudad::create(['nombre_ciudad' => 'Iquique' , 'id_provincia' => '3']);
        Ciudad::create(['nombre_ciudad' => 'Camiña' , 'id_provincia' => '4']);
        Ciudad::create(['nombre_ciudad' => 'Colchane' , 'id_provincia' => '4']);
        Ciudad::create(['nombre_ciudad' => 'Huara' , 'id_provincia' => '4']);
        Ciudad::create(['nombre_ciudad' => 'Pica' , 'id_provincia' => '4']);
        Ciudad::create(['nombre_ciudad' => 'Pozo Almonte' , 'id_provincia' => '4']);
        Ciudad::create(['nombre_ciudad' => 'Antofagasta' , 'id_provincia' => '5']);
        Ciudad::create(['nombre_ciudad' => 'Mejillones' , 'id_provincia' => '5']);
        Ciudad::create(['nombre_ciudad' => 'Sierra Gorda' , 'id_provincia' => '5']);
        Ciudad::create(['nombre_ciudad' => 'Taltal' , 'id_provincia' => '5']);
        Ciudad::create(['nombre_ciudad' => 'Calama' , 'id_provincia' => '6']);
        Ciudad::create(['nombre_ciudad' => 'Ollague' , 'id_provincia' => '6']);
        Ciudad::create(['nombre_ciudad' => 'San Pedro de Atacama' , 'id_provincia' => '6']);
        Ciudad::create(['nombre_ciudad' => 'María Elena' , 'id_provincia' => '7']);
        Ciudad::create(['nombre_ciudad' => 'Tocopilla' , 'id_provincia' => '7']);
    }
}
