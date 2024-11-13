@extends('layouts.app')

@section('content')
    <h1>Detalle Producto</h1>

    <p><strong>Nombre:</strong> {{ $producto->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>
    <p><strong>Precio:</strong> ${{ $producto->precio }}</p>
    <p><strong>Tienda:</strong> {{ $producto->tienda->nombre }}</p>
    <p><strong>Categoría:</strong> {{ $producto->categoria->nombre }}</p>
    <a href="{{ route('productos.index') }}">Regresar</a>
@endsection
