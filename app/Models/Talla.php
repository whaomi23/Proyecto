<?php

// app/Models/Talla.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talla extends Model
{
    use HasFactory;

    protected $fillable = ['talla']; // Definir qué campos pueden ser asignados masivamente

    public function articulos()
    {
        return $this->hasMany(Articulo::class); // Relación con los artículos
    }
}
