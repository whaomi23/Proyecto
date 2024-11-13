@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Artículos</h1>
        <a href="{{ route('articulos.create') }}" class="btn btn-primary mb-3">Agregar Artículo</a>
        
        @if ($articulos->count())
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Producto</th>
                        <th>Talla</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articulos as $articulo)
                        <tr>
                            <td>{{ $articulo->id }}</td>
                            <td>{{ $articulo->producto->nombre }}</td>
                            <td>{{ $articulo->talla }}</td>
                            <td>{{ $articulo->cantidad }}</td>
                            <td>
                                <a href="{{ route('articulos.show', $articulo->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('articulos.edit', $articulo->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay artículos disponibles.</p>
        @endif
    </div>
@endsection
