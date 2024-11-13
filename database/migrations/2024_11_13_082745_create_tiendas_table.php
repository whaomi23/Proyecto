<?php

// database/migrations/xxxx_xx_xx_create_tiendas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendasTable extends Migration
{
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();  // Esta es la clave primaria de la tienda
            $table->string('nombre');
            $table->string('ubicacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tiendas');
    }
}
