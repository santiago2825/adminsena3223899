@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
                    <!-- Encabezado con Verde Principal -->
                    <div class="card-header bg-success text-white text-center fw-bold fs-4 py-3 border-0">
                        Detalles del programa
                    </div>
                    
                    <div class="card-body p-4 bg-white">
                        
                        {{-- Nombre --}}
                        <div class="mb-4 p-3 bg-light-green rounded-3">
                            <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                Nombre del programa
                            </label>
                            <span class="fs-5 fw-bold text-success-dark">
                                {{ $program->name }}
                            </span>
                        </div>

                        {{-- Nivel y Modalidad --}}
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                    Nivel de formación
                                </label>
                                @switch($program->level)
                                    @case('tecnico')
                                        <span class="badge badge-green-light px-3 py-2 rounded-pill fs-6">Técnico</span>
                                        @break
                                    @case('tecnologo')
                                        <span class="badge badge-green-dark px-3 py-2 rounded-pill fs-6">Tecnólogo</span>
                                        @break
                                    @case('curso_bilinguismo')
                                        <span class="badge badge-green-outline px-3 py-2 rounded-pill fs-6">Curso Bilingüismo</span>
                                        @break
                                    @default
                                        <span class="badge badge-green-light px-3 py-2 rounded-pill fs-6">{{ ucfirst($program->level) }}</span>
                                @endswitch
                            </div>

                            <div class="col-md-6">
                                <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                    Modalidad
                                </label>
                                <span class="badge badge-green-outline px-3 py-2 rounded-pill fs-6">
                                    {{ ucfirst($program->mode) }}
                                </span>
                            </div>
                        </div>

                        {{-- Fechas --}}
                        <div class="row mb-4">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                    Fecha de inicio
                                </label>
                                <span class="fw-semibold text-dark-green">
                                    <i class="far fa-calendar-alt me-1 text-success"></i>
                                    {{ \Carbon\Carbon::parse($program->start_date)->format('d/m/Y') }}
                                </span>
                            </div>
                            <div class="col-md-6">
                                <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                    Fecha final
                                </label>
                                <span class="fw-semibold text-dark-green">
                                    <i class="far fa-calendar-check me-1 text-success"></i>
                                    {{ \Carbon\Carbon::parse($program->end_date)->format('d/m/Y') }}
                                </span>
                            </div>
                        </div>

                        {{-- Centro de Formación --}}
                        <div class="mb-4">
                            <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                Centro de formación
                            </label>
                            <span class="fw-semibold text-dark-green">
                                <i class="fas fa-building me-1 text-success"></i>
                                {{ $program->training_center->name ?? 'No asignado' }}
                            </span>
                        </div>
                        {{-- Centro de Formación --}}
                        <div class="mb-4">
                            <label class="text-success small text-uppercase fw-bold d-block mb-1">
                                oferta
                            </label>
                            <span class="fw-semibold text-dark-green">
                                <i class="fas fa-building me-1 text-success"></i>
                                {{ $program->offer->description ?? 'No asignado' }}
                            </span>
                        </div>

                        <hr class="my-4 border-success-subtle">

                        {{-- Botones de Acción --}}
                        <div class="d-flex justify-content-start align-items-center">
                            <a href="{{ route('program.index') }}" class="btn btn-outline-success rounded-pill px-4 fw-semibold">
                                <i class="fas fa-arrow-left me-1"></i> Volver
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<style>
    /* Fondo verde muy claro para destacados */
    .bg-light-green {
        background-color: #f0fdf4;
        border-left: 4px solid #198754;
    }

    /* Colores de texto verde */
    .text-success-dark {
        color: #0f5132;
    }
    .text-dark-green {
        color: #14532d;
    }

    /* Borde del separador */
    .border-success-subtle {
        border-color: #d1e7dd !important;
    }

    /* Badges / Etiqueta personalizadas en tonos de verde */
    .badge-green-dark {
        background-color: #198754;
        color: #ffffff;
    }
    .badge-green-light {
        background-color: #20c997;
        color: #ffffff;
    }
    .badge-green-outline {
        background-color: #ffffff;
        color: #198754;
        border: 1px solid #198754;
    }

    /* Ajuste de botón Volver */
    .btn-outline-success:hover {
        background-color: #198754;
        color: #ffffff;
    }
</style>
@endsection