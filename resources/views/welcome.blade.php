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

    <!-- SECCIÓN OFERTAS EDUCATIVAS -->
    <section class="container py-5">
        <h2 class="text-center text-success fw-bold mb-4">Nuestras ofertas educativas</h2>
        <div class="row g-4">
            
            <div class="col-md-8">
                <!-- card grande con verde suave corregido (bg-opacity-10) -->
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-success bg-opacity-10 card-hover">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <div class="bg-success bg-opacity-25 text-success rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 44px; height:44px;">
                                <i class="bi bi-mortarboard-fill fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-2">Carreras técnicas y tecnológicas</h3>
                            <p class="text-secondary small mb-4">
                                Programas de educación superior diseñados para responder a las necesidades del sector productivo. Duración de 1 a 2 años.
                            </p>
                        </div>
                        <div>
                            <a class="text-success text-decoration-none fw-semibold small">
                                Explorar carreras &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- card pequeña -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white card-hover">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <div class="bg-success bg-opacity-25 text-success rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 44px; height:44px;">
                                <i class="bi bi-broadcast fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-2">Cursos cortos</h3>
                            <p class="text-secondary small mb-4">
                                Formación complementaria para actualizar o adquirir nuevos conocimientos específicos de forma rápida.
                            </p>
                        </div>
                        <div>
                            <a class="text-success text-decoration-none fw-semibold small">
                                Ver cursos &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 card -->
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-white card-hover">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <div class="bg-success bg-opacity-25 text-success rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 44px; height:44px;">
                                <i class="bi bi-globe fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-2">Bilingüismo</h3>
                            <p class="text-secondary small mb-4">
                                Programa integral para el aprendizaje de idiomas, fortaleciendo las competencias comunicativas globales.
                            </p>
                        </div>
                        <div>
                            <a class="text-success text-decoration-none fw-semibold small">
                                Aprender más &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2 card grande -->
            <div class="col-md-8">
                <div class="card h-100 border-0 shadow-sm rounded-3 p-4 bg-success bg-opacity-10 card-hover">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <div class="bg-success bg-opacity-25 text-success rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 44px; height:44px;">
                                <i class="bi bi-display fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-2">Formación virtual</h3>
                            <p class="text-secondary small mb-4">
                                Estudia desde cualquier lugar con nuestra plataforma de aprendizaje en línea. Flexibilidad total para tu desarrollo profesional.
                            </p>
                        </div>
                        <div class="d-flex gap-2 mt-3">
                            <span class="badge bg-success bg-opacity-25 text-success fw-semibold rounded-pill px-3 py-2">Virtual</span>
                            <span class="badge bg-success bg-opacity-25 text-success fw-semibold rounded-pill px-3 py-2">A distancia</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- SECCIÓN ACTUALIDAD SENA -->
    <section class="container py-5">
        <h2 class="text-center text-success fw-bold mb-4">Actualidad SENA</h2>
        
        <div class="row g-4 justify-content-center">
            
            <!-- Card 1 -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <img src="{{ asset('img/imagen5.webp') }}" class="card-img-top object-fit-cover" style="height: 140px;" alt="noticias">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Nuevas alianzas internacionales</h5>
                        <p class="card-text">
                            El SENA firma importantes acuerdos de cooperación para promover el intercambio de aprendices.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <img src="{{ asset('img/imagen4.webp') }}" class="card-img-top object-fit-cover" style="height: 140px;" alt="noticias">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Aprendices triunfan en competencia nacional de robótica</h5>
                        <p class="card-text">
                            Equipos de diferentes regionales demostraron su talento y habilidades técnicas obteniendo los primeros lugares en certámenes tecnológicos.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-4">
                <div class="card h-100 border-0 shadow-sm card-hover">
                    <img src="{{ asset('img/imagen6.webp') }}" class="card-img-top object-fit-cover" style="height: 140px;" alt="noticias">
                    <div class="card-body">
                        <h5 class="card-title text-capitalize">Fondo Emprender abre nuevas convocatorias para jóvenes</h5>
                        <p class="card-text">
                            Se destinan recursos significativos para apoyar iniciativas de negocios innovadoras creadas por jóvenes talentos a nivel nacional.
                        </p>
                    </div>
                </div>
            </div>

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