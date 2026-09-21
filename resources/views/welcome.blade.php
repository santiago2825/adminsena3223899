@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <!-- Bienvenida -->
        <div class="text-center mb-5">
            <h1 class="fw-bold text-success display-5">
                Bienvenido a admin SENA
            </h1>
            <p class="lead text-muted">
                Sistema de Gestión para el Servicio Nacional de Aprendizaje - SENA.
            </p>
        </div>
        <!-- Carrusel -->
        <div id="carouselSena" class="carousel slide shadow rounded-4 overflow-hidden mb-5">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('img/imagen1.jpg') }}" class="d-block w-100" style="height:500px; object-fit:cover;"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/imagen2.jpeg') }}" class="d-block w-100" style="height:500px; object-fit:cover;"
                        alt="">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('img/imagen3.jpg') }}" class="d-block w-100" style="height:500px; object-fit:cover;"
                        alt="">
                </div>
            </div>
            <!-- Botón anterior -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselSena" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
            </button>
            <!-- Botón siguiente -->
            <button class="carousel-control-next" type="button" data-bs-target="#carouselSena" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
            </button>
        </div>
    </div>


<!-- SECCIÓN de ofertas SENA -->
    <section class="container py-5">
        <h2 class="text-center text-success fw-bold mb-4">Nuestras ofertas educativas</h2>
        <div class="row g-4 justify-content-center">
            
            @forelse($offers as $offer)
                <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                    <!-- TARJETA CON ANCHO Y ALTO FIJOS (320px ancho, 350px alto) -->
                    <div class="card border-0 shadow-sm rounded-4 p-4 bg-white card-hover d-flex flex-column justify-content-between" 
                        style="width: 320px; height: 350px; flex-shrink: 0;">
                        
                        <!-- PARTE SUPERIOR (CON SCROLL INTERNO SI EL TEXTO ES MUY LARGO) -->
                        <div class="d-flex flex-column custom-scrollbar" style="overflow-y: auto; max-height: 200px;">
                            <!-- Header: Ícono superior izquierdo -->
                            <div class="mb-3">
                                <div class="rounded-3 d-inline-flex align-items-center justify-content-center" 
                                    style="width: 48px; height: 48px; background-color: #e8f0fe; color: #1e7e34;">
                                    <i class="bi bi-mortarboard fs-5"></i>
                                </div>
                            </div>
                            <!-- Título y Descripción  -->
                            <h3 class="h5 fw-bold text-dark mb-2" style="font-size: 1.15rem; line-height: 1.3;">
                                {{ $offer->title }}
                            </h3>
                            <p class="text-secondary mb-3 me-1" style="font-size: 0.9rem; line-height: 1.4; color: #5f6368;">
                                {{ $offer->description }}
                            </p>
                        </div>
                        <!-- PARTE INFERIOR (SIEMPRE FIJA ABAJO) -->
                        <div class="pt-2">
                            <!-- Contenedor de Fechas -->
                            <div class="p-2 rounded-3 mb-3" style="background-color: #f8f9fa;">
                                <div class="d-flex justify-content-between align-items-center mb-1">
                                    <small class="text-muted" style="font-size: 0.78rem;">
                                        <i class="bi bi-calendar-check text-success me-1"></i> Inicio:
                                    </small>
                                    <small class="fw-semibold text-dark" style="font-size: 0.78rem;">
                                        {{ \Carbon\Carbon::parse($offer->start_date)->format('d/m/Y') }}
                                    </small>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <small class="text-muted" style="font-size: 0.78rem;">
                                        <i class="bi bi-calendar-x text-danger me-1"></i> Cierre:
                                    </small>
                                    <small class="fw-semibold text-dark" style="font-size: 0.78rem;">
                                        {{ \Carbon\Carbon::parse($offer->end_date)->format('d/m/Y') }}
                                    </small>
                                </div>
                            </div>
                            <!-- Botón/Enlace de Explorar -->
                            <div class="text-end">
                                <a href="#" class="fw-bold text-decoration-none d-inline-flex align-items-center gap-1" 
                                    style="color: #1e7e34; font-size: 0.9rem;">
                                    Explorar carreras <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-4">
                    <p class="text-muted">No hay ofertas educativas disponibles por el momento.</p>
                </div>
            @endforelse
        </div>
    </section>

    <!-- SECCIÓN de noticias SENA -->
<section class="container py-5">
    <h2 class="text-center text-success fw-bold mb-4">Actualidad SENA</h2>
    
    <div class="row g-4 justify-content-center">
        
        @forelse($news as $item)
            <div class="col-12 col-md-4">
                
                @if($item->image)
                    <!-- ESTRUCTURA 1: Con Imagen -->
                    <div class="card border-0 shadow-sm card-hover" style="height: 280px;">
                        <!-- Imagen estática -->
                        <img src="{{ asset('storage/images/' . $item->image) }}" class="card-img-top object-fit-cover" style="height: 140px; flex-shrink: 0;" alt="{{ $item->title }}">
                        
                        <!-- Contenido con Scroll -->
                        <div class="card-body" style="overflow-y: auto;">
                            <small class="text-muted d-block mb-1">{{ $item->date }}</small>
                            <h5 class="card-title text-capitalize fw-semibold">{{ $item->title }}</h5>
                            <p class="card-text text-secondary mb-0">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                @else
                    <!-- ESTRUCTURA 2: Sin Imagen -->
                    <div class="card border-0 border-start border-4 border-success shadow-sm card-hover bg-light-subtle" style="height: 280px;">
                        <!-- Contenido con Scroll -->
                        <div class="card-body" style="overflow-y: auto;">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <span class="badge bg-success-subtle text-success border border-success-subtle">Comunicado</span>
                                <small class="text-muted">{{ $item->date }}</small>
                            </div>
                            <h5 class="card-title text-capitalize fw-bold text-success mb-3">
                                {{ $item->title }}
                            </h5>
                            <p class="card-text text-dark-subtle mb-0">
                                {{ $item->description }}
                            </p>
                        </div>
                    </div>
                @endif

            </div>
        @empty
            <div class="col-12 text-center py-4">
                <p class="text-muted">No hay noticias publicadas por el momento.</p>
            </div>
        @endforelse

    </div>
</section>

    <!-- Estilo CSS para el efecto hover -->
    <style>
        .card-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important;
        }
    </style>
@endsection