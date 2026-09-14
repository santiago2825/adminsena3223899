@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                <!-- Encabezado -->
                <div class="card-header bg-success text-white text-center fw-bold fs-4 py-3 border-0">
                    Detalles del ambientes
                </div>

                <div class="card-body p-4 bg-white">
                    <div class="row g-4">
                        {{-- ID --}}
                        <div class="col-md-6">
                            <label class="form-label text-secondary fw-semibold mb-1">ID</label>
                            <p class="fs-5 fw-bold text-dark mb-0">#{{ $environment->id }}</p>
                        </div>

                        {{-- Atributo: name --}}
                        <div class="col-md-6">
                            <label class="form-label text-secondary fw-semibold mb-1">Name</label>
                            <p class="fs-5 fw-bold text-success-dark mb-0">{{ $environment->name }}</p>
                        </div>

                        {{-- Atributo: location --}}
                        <div class="col-md-6">
                            <label class="form-label text-secondary fw-semibold mb-1">Location</label>
                            <p class="fs-6 text-dark mb-0">
                                <i class="fas fa-map-marker-alt text-success me-2"></i>{{ $environment->location }}
                            </p>
                        </div>

                        {{-- Atributo: training_center --}}
                        <div class="col-md-6">
                            <label class="form-label text-secondary fw-semibold mb-1">Training Center</label>
                            <div>
                                <span class="badge bg-success-subtle text-success border border-success-subtle px-3 py-2 fs-6">
                                    <i class="fas fa-building me-1"></i>
                                    {{ $environment->training_center->name ?? $environment->training_center->nombre ?? 'Sin centro' }}
                                </span>
                            </div>
                        </div>

                    <!-- Botones de Acción -->
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="{{ route('environment.index') }}" class="btn btn-outline-success rounded-pill px-4 fw-semibold">
                            <i class="fas fa-arrow-left me-1"></i> Volver
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    /* Color de texto principal */
    .text-success-dark {
        color: #0f5132;
    }

    /* Borde verde tenue */
    .border-success-subtle {
        border-color: #d1e7dd !important;
    }

    /* Fondo verde claro para el badge */
    .bg-success-subtle {
        background-color: #e8f5e9 !important;
    }

    /* Botón volver */
    .btn-outline-success:hover {
        background-color: #198754;
        color: #ffffff;
    }
</style>
@endsection