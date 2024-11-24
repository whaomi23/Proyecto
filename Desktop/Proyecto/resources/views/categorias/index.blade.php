<!-- resources/views/categorias/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <a href="{{ route('home') }}" class="btn btn-secondary btn-sm mb-3">
                    <i class="bi bi-arrow-left"></i> Volver a Home
                </a>
                <h1 class="mb-3">Listado de Categorías</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('categorias.create') }}" class="btn btn-primary">Crear Categoría</a>
            </div>
        </div>

        <!-- Usamos el componente de alerta para mensajes de éxito -->
        <x-alerts-index type="success" :message="Session::get('success')" />

        <!-- Usamos el componente TableResponsive para la tabla -->
        <x-table-responsive-index-categorias>
            <x-slot:header>
                <tr class="text-center">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </x-slot:header>

            <x-slot:body>
                @foreach ($categorias as $categoria)
                    <tr class="text-center">
                        <td>{{ $categoria->id }}</td>
                        <td>{{ $categoria->nombre }}</td>
                        <td>
                            <!-- Usamos el componente ActionButtons para los botones de acción -->
                            <x-accion-botones-index-categorias 
                                :editRoute="route('categorias.edit', $categoria->id)"
                                :deleteRoute="route('categorias.destroy', $categoria->id)"
                            />
                        </td>
                    </tr>
                @endforeach
            </x-slot:body>
        </x-table-responsive-index-categorias>
    </div>
@endsection
