@extends('layouts.app')

@section('content')
    <h1>Detalle Tienda</h1>

    <p><strong>Nombre:</strong> {{ $tienda->nombre }}</p>
    <p><strong>Ubicación:</strong> {{ $tienda->ubicacion }}</p>
    <a href="{{ route('tiendas.index') }}">Regresar</a>
@endsection
