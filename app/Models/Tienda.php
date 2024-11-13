<?php
// app/Models/Tienda.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'ubicacion'];

    public function productos()
    {
        return $this->hasMany(Producto::class);
    }
}
