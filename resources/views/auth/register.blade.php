@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-danger text-white text-center py-3">
                    <h4>{{ __('Registro') }}</h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Icono de Usuario en el centro -->
                        <div class="d-flex justify-content-center mb-4">
                            <div class="icon-container">
                                <i class="fas fa-user-plus fa-4x text-danger"></i>
                            </div>
                        </div>

                        <!-- Campo de Nombre con icono -->
                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Nombre') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="fas fa-user"></i>
                                </span>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo de Correo Electrónico con icono -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            </div>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo de Contraseña con icono -->
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo de Confirmar Contraseña con icono -->
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirmar Contraseña') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="fas fa-lock"></i>
                                </span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-danger btn-lg">
                                <i class="fas fa-user-plus"></i> {{ __('Registrar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('styles')
<!-- FontAwesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
@endsection

@section('scripts')
<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@endsection
