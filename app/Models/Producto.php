<?php
// app/Models/Producto.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'descripcion', 'precio', 'tienda_id', 'categoria_id'];

    public function tienda()
    {
        return $this->belongsTo(Tienda::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function articulos()
    {
        return $this->hasMany(Articulo::class);
    }
}
