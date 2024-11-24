<!-- resources/views/tallas/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Talla</h1>

        <p><strong>ID:</strong> {{ $talla->id }}</p>
        <p><strong>Nombre:</strong> {{ $talla->nombre }}</p>

        <a href="{{ route('tallas.index') }}" class="btn btn-primary">Volver al listado</a>
    </div>
@endsection
