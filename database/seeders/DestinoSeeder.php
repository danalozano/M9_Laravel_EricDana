<?php

namespace Database\Seeders;
use App\Models\Destino;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Destino::create([
            'nombre' => 'Madrid',
            'descripcion' => 'Centro turistico de España.',
            'precio' => 1000.00,
            'pais' => 'España',
        ]);

        Destino::create([
            'nombre' => 'Barcelona',
            'descripcion' => 'Capital de la provincia de Cataluña.',
            'precio' => 2000.50,
            'pais' => 'España',
        ]);

        Destino::create([
            'nombre' => 'Paris',
            'descripcion' => 'Capital de Francia.',
            'precio' => 0.50,
            'pais' => 'Francia',
        ]);

        Destino::create([
            'nombre' => 'Tokio',
            'descripcion' => 'La torre de Tokio.',
            'precio' => 3000.00,
            'pais' => 'Japon',
        ]);

        Destino::create([
            'nombre' => 'Singapur',
            'descripcion' => 'Viajes de ensueño ideado por Dana.',
            'precio' => 5000.00,
            'pais' => 'Singapur',
        ]);

        Destino::create([
            'nombre' => 'Cali',
            'descripcion' => 'Monument Cristo Rey.',
            'precio' => 4000.00,
            'pais' => 'Colombia',
        ]);
    }
}
