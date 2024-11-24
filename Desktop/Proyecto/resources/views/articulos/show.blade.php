<!-- resources/views/articulos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle del Artículo</h1>

        <p><strong>ID:</strong> {{ $articulo->id }}</p>
        <p><strong>Producto:</strong> {{ $articulo->producto->nombre }}</p>
        <p><strong>Talla:</strong> {{ $articulo->talla->nombre }}</p>
        <p><strong>Cantidad:</strong> {{ $articulo->cantidad }}</p>

        <a href="{{ route('articulos.index') }}" class="btn btn-secondary">Volver</a>
    </div>
@endsection
