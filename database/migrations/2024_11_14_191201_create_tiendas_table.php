<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_tiendas_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiendasTable extends Migration
{
    public function up()
    {
        Schema::create('tiendas', function (Blueprint $table) {
            $table->id();
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
