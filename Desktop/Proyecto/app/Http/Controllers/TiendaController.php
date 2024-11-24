<?php

// app/Http/Controllers/TiendaController.php
namespace App\Http\Controllers;

use App\Models\Tienda;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function index()
    {
        $tiendas = Tienda::all();
        return view('tiendas.index', compact('tiendas'));
    }

    public function create()
    {
        return view('tiendas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
        ]);

        Tienda::create($request->all());
        return redirect()->route('tiendas.index')
                         ->with('success', 'Tienda creada correctamente.');
    }

    public function show(Tienda $tienda)
    {
        return view('tiendas.show', compact('tienda'));
    }

    public function edit(Tienda $tienda)
    {
        return view('tiendas.edit', compact('tienda'));
    }

    public function update(Request $request, Tienda $tienda)
    {
        $request->validate([
            'nombre' => 'required',
            'ubicacion' => 'required',
        ]);

        $tienda->update($request->all());
        return redirect()->route('tiendas.index')
                         ->with('success', 'Tienda actualizada correctamente.');
    }

    public function destroy(Tienda $tienda)
    {
        $tienda->delete();
        return redirect()->route('tiendas.index')
                         ->with('success', 'Tienda eliminada correctamente.');
    }
}
