<!-- resources/views/productos/index.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row mb-4">
            <div class="col-md-6">
                <a href="{{ route('home') }}" class="btn btn-secondary btn-sm mb-3">
                    <i class="bi bi-arrow-left"></i> Volver a Home
                </a>
                <h1 class="mb-3">Listado de Productos</h1>
            </div>
            <div class="col-md-6 text-end">
                <a href="{{ route('productos.create') }}" class="btn btn-primary">Crear Producto</a>
            </div>
        </div>


         <!-- Usamos el componente de alerta para mensajes de éxito -->
       <x-alerts-index type="success" :message="Session::get('success')" />

      <!-- Usamos el componente TableResponsive para la tabla -->
      <x-table-responsive-index-productos>
            <x-slot:header>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tienda</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </x-slot:header>

            <x-slot:body>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto->id }}</td>
                        <td>{{ $producto->nombre }}</td>
                        <td>{{ $producto->tienda->nombre }}</td>
                        <td>{{ $producto->categoria->nombre }}</td>
                        <td>
                            <!-- Usamos el componente ActionButtons para los botones de acción -->
                            <x-accion-botones-index-productos
                                :editRoute="route('productos.edit', $producto->id)"
                                :deleteRoute="route('productos.destroy', $producto->id)"
                            />
                        </td>
                    </tr>
                @endforeach
            </x-slot:body>
        </x-table-responsive-index-productos>


    </div>
@endsection
