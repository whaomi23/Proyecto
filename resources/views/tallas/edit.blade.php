<!-- resources/views/tallas/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
       <h1>Editar Talla</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tallas.update', $talla->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="talla" class="form-label">Talla</label>
                <!-- Mostramos la talla actual en el input -->
                <input type="text" name="talla" class="form-control" id="talla" value="{{ old('talla', $talla->talla) }}">
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>

        <a href="{{ route('tallas.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
    </div>
@endsection
