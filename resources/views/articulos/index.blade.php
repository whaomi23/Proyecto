<!-- resources/views/articulos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <!-- Botón de retroceso con ícono -->
                <a href="{{ route('home') }}" class="btn btn-secondary btn-sm mb-3">
                    <i class="bi bi-arrow-left"></i> Volver a Home
                </a>
                <h1 class="mb-3">Listado de Artículos</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('articulos.create') }}" class="btn btn-primary">Crear Artículo</a>
            </div>
        </div>

        <!-- Usamos el componente de alerta para mostrar mensajes -->
        <x-alerts-index type="success" :message="Session::get('success')" />

        <!-- Usamos el componente TableResponsive para la tabla -->
        <x-table-responsive-index-articulos>
            <x-slot:header>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Talla</th>
                    <th>Acciones</th>
                </tr>
            </x-slot:header>

            <x-slot:body>
                @foreach ($articulos as $articulo)
                    <tr class="text-center">
                        <td>{{ $articulo->id }}</td>
                        <td>{{ $articulo->producto->nombre }}</td>
                        <td>{{ $articulo->talla->talla ?? 'No asignada' }}</td>
                        <td>
                            <!-- Usamos el componente Accion Botones Index para los botones de acción -->
                            <x-accion-botones-index-articulos 
                                :editRoute="route('articulos.edit', $articulo->id)"
                                :deleteRoute="route('articulos.destroy', $articulo->id)"
                            />
                        </td>
                    </tr>
                @endforeach
            </x-slot:body>
        </x-table-responsive-index-articulos>
    </div>
@endsection
