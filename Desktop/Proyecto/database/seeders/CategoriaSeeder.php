<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        Categoria::create([
            'nombre' => 'Vestido',
        ]);
        Categoria::create([
            'nombre' => 'Bolso',
        ]);

        Categoria::create([
            'nombre' => 'Pantalones',
        ]);
    }
}
