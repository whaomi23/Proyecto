<!-- resources/views/tiendas/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Tienda</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tiendas.update', $tienda->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre', $tienda->nombre) }}">
            </div>
            <div class="mb-3">
                <label for="ubicacion" class="form-label">Ubicación</label>
                <input type="text" name="ubicacion" class="form-control" id="ubicacion" value="{{ old('ubicacion', $tienda->ubicacion) }}">
            </div>
            <button type="submit" class="btn btn-success">Guardar Cambios</button>
        </form>
    </div>
@endsection
