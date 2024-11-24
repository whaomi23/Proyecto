<!-- resources/views/tallas/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Crear Talla</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tallas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="talla" class="form-label">Talla</label>
                <input type="text" name="talla" class="form-control" id="talla" value="{{ old('talla') }}">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
