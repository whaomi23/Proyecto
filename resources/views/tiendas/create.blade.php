@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Tienda</h1>
        
        <form action="{{ route('tiendas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre de la Tienda</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
