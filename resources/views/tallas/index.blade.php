<!-- resources/views/tallas/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listado de Tallas</h1>
        <a href="{{ route('tallas.create') }}" class="btn btn-primary">Crear Talla</a>
        
        <h1></h1>
        <!-- Mensaje de Éxito -->
        <x-alerts-index type="success" :message="Session::get('success')" />

        <x-table-responsive-index-tallas>
            <x-slot:header>
                <th>ID</th>
                <th>Talla</th>
                <th>Acciones</th>
            </x-slot:header>
            <x-slot:body>
                @foreach ($tallas as $talla)
                    <tr>
                        <td>{{ $talla->id }}</td>
                        <td>{{ $talla->talla }}</td>
                        <td>
                            <a href="{{ route('tallas.show', $talla->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('tallas.edit', $talla->id) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('tallas.destroy', $talla->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </x-slot:body>
        </x-table-responsive-index-tallas>
    </div>
@endsection
