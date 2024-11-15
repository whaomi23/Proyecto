@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Artículo</h1>
        
        <form action="{{ route('articulos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="producto_id">Producto</label>
                <select name="producto_id" class="form-control" required>
                    <option value="">Seleccionar producto</option>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="talla">Talla</label>
                <input type="text" name="talla" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
