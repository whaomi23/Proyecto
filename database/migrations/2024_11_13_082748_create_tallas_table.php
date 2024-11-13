<?php

// database/migrations/xxxx_xx_xx_create_tallas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTallasTable extends Migration
{
    public function up()
    {
        Schema::create('tallas', function (Blueprint $table) {
            $table->id();  // Clave primaria
            $table->string('nombre');  // Ejemplo: XS, S, M, L, XL
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tallas');
    }
}
