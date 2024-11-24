<?php

// database/seeders/TallaSeeder.php
namespace Database\Seeders;

use App\Models\Talla;
use Illuminate\Database\Seeder;

class TallaSeeder extends Seeder
{
    public function run()
    {
        $tallas = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];

        foreach ($tallas as $talla) {
            Talla::create(['talla' => $talla]);
        }
    }
}
