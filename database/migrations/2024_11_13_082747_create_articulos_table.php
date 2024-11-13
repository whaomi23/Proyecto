<?php

// database/migrations/xxxx_xx_xx_create_articulos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();  // Clave primaria para los artículos
            $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');  // Clave foránea de productos
            $table->string('talla');  // Talla del artículo (XS, S, M, L, etc.)
            $table->integer('cantidad');  // Cantidad de artículos en stock
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
