<!--resources/views/home.blade.php-->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 mb-4">
            <h2 class="text-center text-dark font-weight-bold">{{ __('Panel de Opciones') }}</h2>
        </div>

        <!-- Card para Tiendas -->
        <x-home-card-tiendas/>

        <!-- Card para Productos -->
        <x-home-card-productos/>

        <!-- Card para Categorías -->
        <x-home-card-categorias/>

        <!-- Card para Tallas -->
        <x-home-card-tallas/>

        <!-- Card para Artículos -->
        <x-home-card-articulos/>


    </div>
</div>
@endsection
