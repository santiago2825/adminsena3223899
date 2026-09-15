@extends('layouts.app')

@section('content')
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 p-md-5">

                    <!-- Título del Formulario -->
                    <h2 class="text-center text-success fw-bold mb-4">Iniciar Sesión</h2>

                    <!-- Alerta de Error General (Si fallan las credenciales) -->
                    @if (session('error'))
                        <div class="alert alert-danger text-center py-2 mb-3 small">
                            {{ session('error') }}
                        </div>
                    @endif

                    <!-- Formulario -->
                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf
                        
                        <!-- Campo de Correo Electrónico -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" 
                                value="{{ old('email') }}" placeholder="ejemplo@sena.edu.co" required autofocus>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Campo de Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Contraseña</label>
                            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" 
                                placeholder="••••••••" required>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Botón de Envío -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-success py-2 fw-bold">Ingresar</button>
                        </div>

                        <!-- Enlace para ir al registro -->
                        <div class="text-center">
                            <p class="small text-muted mb-0">¿No tienes una cuenta? 
                                <a href="{{ route('registro') }}" class="text-success text-decoration-none fw-semibold">Regístrate aquí</a>
                            </p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection