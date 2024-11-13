<?php

namespace App\Http\Controllers;

use App\Models\Tienda;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    // Constructor para proteger rutas
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Muestra la lista de tiendas
    public function index()
    {
        $tiendas = Tienda::all();
        return view('tiendas.index', compact('tiendas'));
    }

    // Muestra el formulario para crear una tienda
    public function create()
    {
        return view('tiendas.create');
    }

    // Guarda una nueva tienda en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
        ]);

        Tienda::create($request->all());

        return redirect()->route('tiendas.index')->with('success', 'Tienda creada correctamente');
    }

    // Muestra el formulario para editar una tienda
    public function edit(Tienda $tienda)
    {
        return view('tiendas.edit', compact('tienda'));
    }

    // Actualiza los datos de una tienda
    public function update(Request $request, Tienda $tienda)
    {
        $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
        ]);

        $tienda->update($request->all());

        return redirect()->route('tiendas.index')->with('success', 'Tienda actualizada correctamente');
    }

    // Muestra los detalles de una tienda
    public function show(Tienda $tienda)
    {
        return view('tiendas.show', compact('tienda'));
    }

    // Elimina una tienda
    public function destroy(Tienda $tienda)
    {
        $tienda->delete();

        return redirect()->route('tiendas.index')->with('success', 'Tienda eliminada correctamente');
    }
}
