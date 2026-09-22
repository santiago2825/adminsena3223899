@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row g-4 justify-content-center">
        
        @forelse($programs as $program)
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                
                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white d-flex flex-column justify-content-between" 
                     style="width: 350px; height: 420px; flex-shrink: 0; border-top: 4px solid #1e7e34 !important;">
                    
                    <!-- PARTE SUPERIOR -->
                    <div class="d-flex flex-column custom-scrollbar" style="overflow-y: auto; max-height: 250px;">
                        
                        <!-- Header: Offer Name & ID -->
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <span class="badge border-0 px-3 py-2 rounded-pill fw-semibold" 
                                  style="background-color: #e8f5e9; color: #1e7e34; font-size: 0.75rem;">
                                {{ is_object($program->offer) ? ($program->offer->title ?? 'Offer '.$program->offer->id) : $program->offer }}
                            </span>
                            <span class="text-muted small fw-bold">
                                #{{ $program->id }}
                            </span>
                        </div>

                        <!-- Level -->
                        <span class="text-uppercase fw-bold text-muted d-block mb-1" style="font-size: 0.75rem; letter-spacing: 0.5px;">
                            {{ $program->level }}
                        </span>

                        <!-- Name -->
                        <h3 class="h5 fw-bold text-dark mb-3" style="font-size: 1.15rem; line-height: 1.3;">
                            {{ $program->name }}
                        </h3>

                        <!-- Info Box: Center & Modality -->
                        <div class="p-3 rounded-3 mb-3" style="background-color: #f8f9fa;">
                            <div class="d-flex align-items-center mb-2">
                                <i class="bi bi-geo-alt text-secondary me-2" style="font-size: 0.85rem;"></i>
                                <small class="text-secondary text-truncate" style="font-size: 0.8rem;">
                                    <strong>Centro:</strong> {{ $program->training_center->name ?? 'No especificado' }}
                                </small>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person-workspace text-secondary me-2" style="font-size: 0.85rem;"></i>
                                <small class="text-secondary" style="font-size: 0.8rem;">
                                    <strong>Modalidad:</strong> {{ $program->mode }}
                                </small>
                            </div>
                        </div>

                    </div>

                    <!-- PARTE INFERIOR FIJA -->
                    <div class="pt-2">
                        <!-- Dates -->
                        <div class="d-flex justify-content-between align-items-center mb-3 px-1">
                            <div>
                                <small class="text-muted d-block" style="font-size: 0.72rem;">Fecha inicio</small>
                                <span class="fw-bold text-dark" style="font-size: 0.82rem;">
                                    {{ \Carbon\Carbon::parse($program->start_date)->format('d/m/Y') }}
                                </span>
                            </div>
                            <div class="text-end">
                                <small class="text-muted d-block" style="font-size: 0.72rem;">Fecha final</small>
                                <span class="fw-bold text-danger" style="font-size: 0.82rem;">
                                    {{ \Carbon\Carbon::parse($program->end_date)->format('d/m/Y') }}
                                </span>
                            </div>
                        </div>

                        <!-- Button -->
                        <a href="#" class="btn w-100 text-white fw-bold py-2 rounded-3 shadow-sm d-flex align-items-center justify-content-center gap-2" 
                           style="background-color: #007a33; border: none; font-size: 0.9rem;">
                            Inscribirme / Postular <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>

                </div>
            </div>
        @empty
            <!-- ESTADO VACÍO MEJORADO -->
            <div class="col-12 col-md-8 col-lg-6 my-4">
                <div class="card border-0 shadow-sm rounded-4 p-5 bg-white text-center">
                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3 mx-auto" 
                         style="width: 70px; height: 70px; background-color: #e8f5e9; color: #1e7e34;">
                        <i class="bi bi-folder-x fs-2"></i>
                    </div>
                    
                    <h4 class="h5 fw-bold text-dark mb-2">No se encontraron programas disponibles</h4>
                    <p class="text-secondary small mb-4" style="max-width: 400px; margin: 0 auto;">
                        La oferta educativa seleccionada no cuenta con programas asignados o registrados en este momento.
                    </p>

                    <div>
                        <a href="/" class="btn text-white fw-semibold px-4 py-2 rounded-3 shadow-sm d-inline-flex align-items-center gap-2" 
                           style="background-color: #007a33; border: none; font-size: 0.9rem;">
                            <i class="bi bi-arrow-left"></i> Ver otras ofertas
                        </a>
                    </div>
                </div>
            </div>
        @endforelse

    </div>
</div>

<!-- Estilo CSS opcional para la barra de desplazamiento interna -->
<style>
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #d1d5db;
        border-radius: 4px;
    }
</style>
@endsection