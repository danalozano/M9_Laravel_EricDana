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
            'descripcion' => 'Centro turistico de España',
            'precio' => 1000.00,
            'pais' => 'España',
        ]);

        Destino::create([
            'nombre' => 'Barcelona',
            'descripcion' => 'Capital de la provincia de Cataluña',
            'precio' => 1200.50,
            'pais' => 'España',
        ]);
    }
}
