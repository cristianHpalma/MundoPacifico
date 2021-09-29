<?php

namespace Database\Seeders;

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::create(['nombre_region' => 'Arica y Parinacota' , 'ordinal_region' => 'XV']);
        Region::create(['nombre_region' => 'Tarapacá' , 'ordinal_region' => 'I']);
        Region::create(['nombre_region' => 'Antofagasta' , 'ordinal_region' => 'II']);
    }
}
