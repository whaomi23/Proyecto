@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Artículo</h1>
        
        <form action="{{ route('articulos.update', $articulo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="producto_id">Producto</label>
                <select name="producto_id" class="form-control" required>
                    <option value="">Seleccionar producto</option>
                    @foreach($productos as $producto)
                        <option value="{{ $producto->id }}" {{ $producto->id == $articulo->producto_id ? 'selected' : '' }}>
                            {{ $producto->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="talla">Talla</label>
                <input type="text" name="talla" class="form-control" value="{{ $articulo->talla }}" required>
            </div>

            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" name="cantidad" class="form-control" value="{{ $articulo->cantidad }}" required>
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
