<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\equipo_de_trabajo;

class EquipoDeTrabajoSeeder extends Seeder
{
    public function run()
    {
        equipo_de_trabajo::create([
            'equipo' => 'Equipo A',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo B',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo C',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo D',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo E',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo F',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo G',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo H',
        ]);
        equipo_de_trabajo::create([
            'equipo' => 'Equipo I',
        ]);
    }
}
