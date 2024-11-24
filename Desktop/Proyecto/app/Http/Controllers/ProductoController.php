<?php

// app/Http/Controllers/ProductoController.php
namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tienda;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Producto::with(['tienda', 'categoria'])->get();
        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $tiendas = Tienda::all();
        $categorias = Categoria::all();
        return view('productos.create', compact('tiendas', 'categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tienda_id' => 'required|exists:tiendas,id',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        Producto::create($request->all());
        return redirect()->route('productos.index')
                         ->with('success', 'Producto creado correctamente.');
    }

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    public function edit(Producto $producto)
    {
        $tiendas = Tienda::all();
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'tiendas', 'categorias'));
    }

    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'tienda_id' => 'required|exists:tiendas,id',
            'categoria_id' => 'required|exists:categorias,id',
        ]);

        $producto->update($request->all());
        return redirect()->route('productos.index')
                         ->with('success', 'Producto actualizado correctamente.');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')
                         ->with('success', 'Producto eliminado correctamente.');
    }
}
