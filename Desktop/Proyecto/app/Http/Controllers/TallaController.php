<?php

// app/Http/Controllers/TallaController.php
namespace App\Http\Controllers;

use App\Models\Talla;
use Illuminate\Http\Request;

class TallaController extends Controller
{
    public function index()
    {
        $tallas = Talla::all();
        return view('tallas.index', compact('tallas'));
    }

    public function create()
    {
        return view('tallas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'talla' => 'required|unique:tallas,talla|max:5',
        ]);

        Talla::create($request->all());
        return redirect()->route('tallas.index')->with('success', 'Talla creada correctamente.');
    }

    public function show(Talla $talla)
    {
        return view('tallas.show', compact('talla'));
    }

    public function edit(Talla $talla)
    {
        return view('tallas.edit', compact('talla'));
    }

    public function update(Request $request, Talla $talla)
    {
        $request->validate([
            'talla' => 'required|unique:tallas,talla,' . $talla->id . '|max:5',
        ]);

        $talla->update($request->all());
        return redirect()->route('tallas.index')->with('success', 'Talla actualizada correctamente.');
    }

    public function destroy(Talla $talla)
    {
        $talla->delete();
        return redirect()->route('tallas.index')->with('success', 'Talla eliminada correctamente.');
    }
}
