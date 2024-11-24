<!-- resources/views/productos/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Producto</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('productos.update', $producto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre', $producto->nombre) }}">
            </div>
            <div class="mb-3">
                <label for="tienda_id" class="form-label">Tienda</label>
                <select name="tienda_id" class="form-control">
                    @foreach ($tiendas as $tienda)
                        <option value="{{ $tienda->id }}" {{ $producto->tienda_id == $tienda->id ? 'selected' : '' }}>{{ $tienda->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="categoria_id" class="form-label">Categoría</label>
                <select name="categoria_id" class="form-control">
                    @foreach ($categorias as $categoria)
                        <option value="{{ $categoria->id }}" {{ $producto->categoria_id == $categoria->id ? 'selected' : '' }}>{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
