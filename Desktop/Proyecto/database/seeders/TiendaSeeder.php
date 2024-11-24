<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tienda;

class TiendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Tienda::create([
            'nombre' => 'Tienda A',
            'ubicacion' => 'Ubicacion A',
        ]);
    }
}


