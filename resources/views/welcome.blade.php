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
    <div class="container py-5">
        <h2 class="text-center text-success fw-bold mb-4">Nuestras ofertas educativas</h2>
        <div class="row g-4">
            <div class="col-md-8">
                <!-- card grande-->
                <div class="card h-100 border rounded-3 p-4 bg-success bg-opacity-10">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <div class="bg-success bg-opacity-25 text-succes rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 44px; height:44px;">
                                <i class="bi bi-mortarboard-fill fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-2">carreras tecnicas y tecnologicas
                            </h3>
                            <p class="text-secundary small mb-4">
                                programas de educacion superior diseños para responder a las necesidades del sector
                                productivo. duracion de 1 a 2 años.
                            </p>

                        </div>
                        <div>
                            <a class="text-success text-decoration-none fw-semibold small">
                                explorar carreras &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--card pequeña-->
            <div class="col-md-4">
                <div class="card h-100 border rounded p-4 bg-white">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <div class="bg-success bg-opacity-25 text-succes rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 44px; height:44px;">
                                <i class="bi bi-broadcast fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark md-2">
                                cursos cortos
                            </h3>
                            <p class="text-secundary small mb-4">
                                formacion complementaria para actualizar o adquirir nuevos conocimientos especificos de
                                forma rapida
                            </p>
                        </div>
                        <div>
                            <a class="text-success text-decoration-none fw-semibold small">
                                ver cursos &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--2 card-->
            <div class="col-md-4">
                <div class="card h-100 border rounded p-4 bg-white">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <div class="bg-success bg-opacity-25 text-succes rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 44px; height:44px;">
                                <i class="bi bi-globe fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark md-2">
                                bilinguismo
                            </h3>
                            <p class="text-secundary small mb-4">
                                programa integral para el aprendizaje de idiomas, fortaleciendo las competencias comunicativas globales.
                            </p>
                        </div>
                        <div>
                            <a class="text-success text-decoration-none fw-semibold small">
                                Aprender mas &rarr;
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--2 card grande-->
            <div class="col-md-8">
                <div class="card h-100 border rounded-3 p-4 bg-success bg-opacity-10">
                    <div class="card-body p-0 d-flex flex-column justify-content-between">
                        <div>
                            <div class="bg-success bg-opacity-25 text-succes rounded-3 d-inline-flex align-items-center justify-content-center mb-3"
                                style="width: 44px; height:44px;">
                                <i class="bi bi-display fs-5"></i>
                            </div>
                            <h3 class="h5 fw-bold text-dark mb-2">
                                formacion virtual
                            </h3>
                            <p class="text-secundary small mb-4">
                                estudia desde cualquier lugar con nuestra plataforma de aprendizaje en linea. flexibilidad total para tu desarrollo profesional
                            </p>
                        </div>
                    </div>
                    <div class="d-flex gap-2 ms-md-5 ps-md-2">
                    <span class="badge bg-success bg-opacity-10 text-success fw-semibod rounded-pill px-3 py-2">virtual</span>
                    <span class="badge bg-success bg-opacity-10 text-success fw-semibod rounded-pill px-3 py-2">a distancia</span>
                </div>
                </div>
                
            </div>
        </div>

    </div>
@endsection
