<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Producto;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    // Constructor para proteger rutas
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Muestra la lista de artículos
    public function index()
    {
        $articulos = Articulo::all();
        return view('articulos.index', compact('articulos'));
    }

    // Muestra el formulario para crear un artículo
    public function create()
    {
        $productos = Producto::all();
        return view('articulos.create', compact('productos'));
    }

    // Guarda un nuevo artículo en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required',
            'talla' => 'required',
            'cantidad' => 'required|numeric',
        ]);

        Articulo::create($request->all());

        return redirect()->route('articulos.index')->with('success', 'Artículo creado correctamente');
    }

    // Muestra el formulario para editar un artículo
    public function edit(Articulo $articulo)
    {
        $productos = Producto::all();
        return view('articulos.edit', compact('articulo', 'productos'));
    }

    // Actualiza los datos de un artículo
    public function update(Request $request, Articulo $articulo)
    {
        $request->validate([
            'producto_id' => 'required',
            'talla' => 'required',
            'cantidad' => 'required|numeric',
        ]);

        $articulo->update($request->all());

        return redirect()->route('articulos.index')->with('success', 'Artículo actualizado correctamente');
    }

    // Muestra los detalles de un artículo
    public function show(Articulo $articulo)
    {
        return view('articulos.show', compact('articulo'));
    }

    // Elimina un artículo
    public function destroy(Articulo $articulo)
    {
        $articulo->delete();

        return redirect()->route('articulos.index')->with('success', 'Artículo eliminado correctamente');
    }
}
