<!-- resources/views/articulos/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Artículo</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('articulos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="producto_id" class="form-label">Producto</label>
                <select name="producto_id" class="form-control" id="producto_id">
                    @foreach ($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="talla_id" class="form-label">Talla</label>
                <select name="talla_id" class="form-control" id="talla_id">
                    @foreach ($tallas as $talla)
                        <option value="{{ $talla->id }}">{{ $talla->talla }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" id="cantidad" min="1">
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
