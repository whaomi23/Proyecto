@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Artículo</h1>
        
        <div class="card">
            <div class="card-body">
                <h3>{{ $articulo->producto->nombre }}</h3>
                <p><strong>Talla:</strong> {{ $articulo->talla }}</p>
                <p><strong>Cantidad:</strong> {{ $articulo->cantidad }}</p>
            </div>
        </div>

        <a href="{{ route('articulos.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
    </div>
@endsection
