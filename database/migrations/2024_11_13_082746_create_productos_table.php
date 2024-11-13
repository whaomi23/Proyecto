<?php

// database/migrations/xxxx_xx_xx_create_productos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();  // Clave primaria de tipo bigInteger
            $table->string('nombre');
            $table->text('descripcion');
            $table->decimal('precio', 8, 2);
            $table->foreignId('tienda_id')->constrained('tiendas')->onDelete('cascade');  // Relación con la tabla tiendas
            $table->foreignId('categoria_id')->constrained('categorias')->onDelete('cascade');  // Relación con la tabla categorias
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
