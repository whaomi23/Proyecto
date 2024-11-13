@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Tiendas</h1>
        <a href="{{ route('tiendas.create') }}" class="btn btn-primary mb-3">Agregar Tienda</a>
        
        @if ($tiendas->count())
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Dirección</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tiendas as $tienda)
                        <tr>
                            <td>{{ $tienda->id }}</td>
                            <td>{{ $tienda->nombre }}</td>
                            <td>{{ $tienda->direccion }}</td>
                            <td>
                                <a href="{{ route('tiendas.show', $tienda->id) }}" class="btn btn-info">Ver</a>
                                <a href="{{ route('tiendas.edit', $tienda->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('tiendas.destroy', $tienda->id) }}" method="POST" style="display:inline;">
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
            <p>No hay tiendas disponibles.</p>
        @endif
    </div>
@endsection
