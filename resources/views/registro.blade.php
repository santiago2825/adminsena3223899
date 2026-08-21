@extends('layouts.app')

@section('content')
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 card-hover bg-white">
                <div class="card-body p-4 p-md-5">
                    
                    <!-- Título -->
                    <h2 class="text-center text-success fw-bold mb-2">Crear Cuenta</h2>
                    <p class="text-center text-muted small mb-4">Regístrate en el Sistema de Gestión SENA</p>
                    
                    <!-- Formulario -->
                    <form>
                        <!-- Campo de Nombre -->
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold small">Nombre Completo</label>
                            <input type="text" class="form-control" id="name" placeholder="Ej. Carlos Pérez" required>
                        </div>
                        
                        <!-- Campo de Correo Electrónico -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold small">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="correo@gmail.com" required>
                        </div>
                        
                        <!-- Campo de Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold small">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="Mínimo 8 caracteres" required>
                        </div>

                        <!-- Confirmar Contraseña (Opcional pero recomendado para registros) -->
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold small">Confirmar Contraseña</label>
                            <input type="password" class="form-control" id="password_confirmation" placeholder="Repite tu contraseña" required>
                        </div>
                        
                        <!-- Botón de Registro -->
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-success py-2 fw-bold">Registrarse</button>
                        </div>

                        <!-- Enlace para ir al Login -->
                        <div class="text-center">
                            <p class="small text-muted mb-0">¿Ya tienes una cuenta? <a href="/login" class="text-success text-decoration-none fw-semibold">Inicia sesión aquí</a></p>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection