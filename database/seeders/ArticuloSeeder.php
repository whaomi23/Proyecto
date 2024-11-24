<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Articulo;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Articulo::create([
            'producto_id' => 1,
            'talla_id' => 1,
            'cantidad' => 10,
        ]);
        Articulo::create([
            'producto_id' => 1,
            'talla_id' => 2,
            'cantidad' => 5,
        ]);
    }
}
