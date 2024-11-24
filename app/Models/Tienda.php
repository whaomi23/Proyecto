<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    // Indica los campos que se pueden asignar de manera masiva
    protected $fillable = [
        'nombre',
        'ubicacion',
    ];

    /**
     * Relación: una tienda puede tener muchos productos.
     */
    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
