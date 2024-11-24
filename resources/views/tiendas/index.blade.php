<!-- resources/views/tiendas/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <a href="{{ route('home') }}" class="btn btn-secondary btn-sm mb-3">
                    <i class="bi bi-arrow-left"></i> Volver a Home
                </a>
                <h1 class="mb-3">Listado de Tiendas</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('tiendas.create') }}" class="btn btn-primary">Crear Tienda</a>
            </div>
        </div>

        <!-- Usamos el componente Alert para mostrar mensajes de éxito -->
        <x-alerts-index type="success" :message="Session::get('success')" />

        <!-- Usamos el componente TableResponsive para la tabla -->
        <x-table-responsive-index-tiendas>
            <x-slot:header>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </x-slot:header>

            <x-slot:body>
                @foreach ($tiendas as $tienda)
                    <tr>
                        <td>{{ $tienda->id }}</td>
                        <td>{{ $tienda->nombre }}</td>
                        <td>{{ $tienda->ubicacion }}</td>
                        <td>
                            <!-- Usamos el componente ActionButtons para los botones de acción -->
                            <x-accion-botones-index-tiendas
                                :editRoute="route('tiendas.edit', $tienda->id)"
                                :deleteRoute="route('tiendas.destroy', $tienda->id)"
                            />
                        </td>
                    </tr>
                @endforeach
            </x-slot:body>
        </x-table-responsive-index-tiendas>
    </div>
@endsection
