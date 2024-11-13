@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Tienda</h1>
        
        <div class="card">
            <div class="card-body">
                <h3>{{ $tienda->nombre }}</h3>
                <p><strong>Dirección:</strong> {{ $tienda->direccion }}</p>
            </div>
        </div>

        <a href="{{ route('tiendas.index') }}" class="btn btn-primary mt-3">Volver a la lista</a>
    </div>
@endsection
