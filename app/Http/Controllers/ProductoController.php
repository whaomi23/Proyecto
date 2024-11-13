<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Tienda;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Constructor para proteger rutas
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Muestra la lista de productos
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    // Muestra el formulario para crear un producto
    public function create()
    {
        $tiendas = Tienda::all();
        $categorias = Categoria::all();
        return view('productos.create', compact('tiendas', 'categorias'));
    }

    // Guarda un nuevo producto en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'tienda_id' => 'required',
            'categoria_id' => 'required',
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto creado correctamente');
    }

    // Muestra el formulario para editar un producto
    public function edit(Producto $producto)
    {
        $tiendas = Tienda::all();
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'tiendas', 'categorias'));
    }

    // Actualiza los datos de un producto
    public function update(Request $request, Producto $producto)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required|numeric',
            'tienda_id' => 'required',
            'categoria_id' => 'required',
        ]);

        $producto->update($request->all());

        return redirect()->route('productos.index')->with('success', 'Producto actualizado correctamente');
    }

    // Muestra los detalles de un producto
    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto'));
    }

    // Elimina un producto
    public function destroy(Producto $producto)
    {
        $producto->delete();

        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente');
    }
}
