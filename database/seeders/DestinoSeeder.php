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
            'fecha_ida' => '24-12-2023',
            'fecha_vuelta' => '28-12-2023',
        ]);

        Destino::create([
            'nombre' => 'Barcelona',
            'descripcion' => 'Capital de la provincia de Cataluña.',
            'precio' => 2000.50,
            'pais' => 'España',
            'fecha_ida' => '20-12-2023',
            'fecha_vuelta' => '03-01-2024',
        ]);

        Destino::create([
            'nombre' => 'Paris',
            'descripcion' => 'Capital de Francia.',
            'precio' => 0.50,
            'pais' => 'Francia',
            'fecha_ida' => '10-02-2024',
            'fecha_vuelta' => '20-02-2024',
        ]);

        Destino::create([
            'nombre' => 'Tokio',
            'descripcion' => 'La torre de Tokio.',
            'precio' => 3000.00,
            'pais' => 'Japon',
            'fecha_ida' => '01-07-2024',
            'fecha_vuelta' => '01-08-2024',
        ]);

        Destino::create([
            'nombre' => 'Singapur',
            'descripcion' => 'Viajes de ensueño ideado por Dana.',
            'precio' => 5000.00,
            'pais' => 'Singapur',
            'fecha_ida' => '15-03-2024',
            'fecha_vuelta' => '01-04-2024',
        ]);

        Destino::create([
            'nombre' => 'Cali',
            'descripcion' => 'Monument Cristo Rey.',
            'precio' => 4000.00,
            'pais' => 'Colombia',
            'fecha_ida' => '01-12-2023',
            'fecha_vuelta' => '05-01-2024',
        ]);
    }
}
