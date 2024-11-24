<?php
// app/Http/Controllers/ArticuloController.php
namespace App\Http\Controllers;

use App\Models\Articulo;
use App\Models\Producto;
use App\Models\Talla;
use Illuminate\Http\Request;

class ArticuloController extends Controller
{
    public function index()
    {
        $articulos = Articulo::with(['producto', 'talla'])->get();
        return view('articulos.index', compact('articulos'));
    }

    public function create()
    {
        $productos = Producto::all();
        $tallas = Talla::all();
        return view('articulos.create', compact('productos', 'tallas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'talla_id' => 'required|exists:tallas,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        Articulo::create($request->all());
        return redirect()->route('articulos.index')
                         ->with('success', 'Articulo creado correctamente.');
    }

    public function show(Articulo $articulo)
    {
        return view('articulos.show', compact('articulo'));
    }

    public function edit(Articulo $articulo)
    {
        $productos = Producto::all();
        $tallas = Talla::all();
        return view('articulos.edit', compact('articulo', 'productos', 'tallas'));
    }

    public function update(Request $request, Articulo $articulo)
    {
        $request->validate([
            'producto_id' => 'required|exists:productos,id',
            'talla_id' => 'required|exists:tallas,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        $articulo->update($request->all());
        return redirect()->route('articulos.index')
                         ->with('success', 'Articulo actualizado correctamente.');
    }

    public function destroy(Articulo $articulo)
    {
        $articulo->delete();
        return redirect()->route('articulos.index')
                         ->with('success', 'Articulo eliminado correctamente.');
    }
}
