@extends('layouts.app')

@section('content')
<section class="container py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 p-md-5">

                    <!-- Título del Formulario -->
                    <h2 class="text-center text-success fw-bold mb-4">Iniciar Sesión</h2>

                    <!-- Formulario -->
                    <form>
                        <!-- Campo de Correo Electrónico -->
                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" placeholder="ejemplo@sena.edu.co"
                                required>
                        </div>

                        <!-- Campo de Contraseña -->
                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold">Contraseña</label>
                            <input type="password" class="form-control" id="password" placeholder="••••••••" required>
                        </div>

                        <!-- Botón de Envío -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success py-2 fw-bold">Ingresar</button>
                        </div>
                        <!-- Enlace para ir al registro -->
                        <div class="text-center">
                            <p class="small text-muted mb-0">¿No tienes una cuenta? <a href="/registro" class="text-success text-decoration-none fw-semibold">registrate aqui</a></p>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
