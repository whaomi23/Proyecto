<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

// database/migrations/xxxx_xx_xx_xxxxxx_create_tallas_table.php
class CreateTallasTable extends Migration
{
    public function up()
    {
        Schema::create('tallas', function (Blueprint $table) {
            $table->id();
            $table->string('talla');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('tallas');
    }
}
