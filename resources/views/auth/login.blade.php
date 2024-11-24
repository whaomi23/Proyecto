@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card shadow-lg border-0 rounded-3">
                <div class="card-header bg-primary text-white text-center py-3">
                    <h4>{{ __('Iniciar Sesión') }}</h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Icono de Usuario en el centro -->
                        <div class="d-flex justify-content-center mb-4">
                            <div class="icon-container">
                                <i class="fas fa-user-circle fa-4x text-primary"></i>
                            </div>
                        </div>

                        <!-- Campo de Email con icono -->
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Correo Electrónico') }}</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light border-0">
                                    <i class="fas fa-envelope"></i>
                                </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Recordar usuario y contraseña olvidada -->
                        <div class="mb-4 d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">{{ __('Recordarme') }}</label>
                            </div>
                            @if (Route::has('password.request'))
                                <a class="btn btn-link p-0" href="{{ route('password.request') }}">
                                    <i class="fas fa-question-circle"></i> {{ __('¿Olvidaste tu contraseña?') }}
                                </a>
                            @endif
                        </div>

                        <!-- Botón de Enviar -->
                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-sign-in-alt"></i> {{ __('Iniciar Sesión') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

