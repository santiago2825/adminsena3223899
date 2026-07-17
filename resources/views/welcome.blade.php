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
                <img src="{{ asset('img/imagen1.jpg') }}"
                    class="d-block w-100"
                    style="height:500px; object-fit:cover;"
                    alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/imagen2.jpeg') }}"
                    class="d-block w-100"
                    style="height:500px; object-fit:cover;"
                    alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/imagen3.jpg') }}"
                    class="d-block w-100"
                    style="height:500px; object-fit:cover;"
                    alt="">
            </div>
        </div>
        <!-- Botón anterior -->
        <button class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselSena"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-dark rounded-circle p-3"></span>
        </button>
        <!-- Botón siguiente -->
        <button class="carousel-control-next"
            type="button"
            data-bs-target="#carouselSena"
            data-bs-slide="next">
            <span class="carousel-control-next-icon bg-dark rounded-circle p-3"></span>
        </button>
    </div>
    <!-- Misión y Visión -->
    <div class="row g-4">
        <div class="col-md-6">
            <div class="card shadow h-100 border-0">
                <div class="card-header bg-success text-white text-center">
                    <h3>Misión</h3>
                </div>
                <div class="card-body">
                    <p class="text-justify">
                        El Servicio Nacional de Aprendizaje (SENA) está encargado de cumplir la función
                        que corresponde al Estado de invertir en el desarrollo social y técnico de los
                        trabajadores colombianos, ofreciendo formación profesional integral para contribuir
                        al desarrollo económico, social y tecnológico del país.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow h-100 border-0">
                <div class="card-header bg-success text-white text-center">
                    <h3>Visión</h3>
                </div>
                <div class="card-body">
                    <p class="text-justify">
                        Para el año 2026 el SENA continuará consolidándose como la entidad líder en
                        formación profesional integral, impulsando la innovación, la transformación
                        digital, el emprendimiento y la empleabilidad para fortalecer la competitividad
                        del país.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
