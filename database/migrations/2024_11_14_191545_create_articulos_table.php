<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// database/migrations/xxxx_xx_xx_xxxxxx_create_articulos_table.php
class CreateArticulosTable extends Migration
{
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('producto_id')->constrained()->onDelete('cascade');
            $table->foreignId('talla_id')->constrained()->onDelete('cascade');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
