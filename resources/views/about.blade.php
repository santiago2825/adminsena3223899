@extends('layouts.app')
@section('content')
    <div class="container py-5">
        <div class="text-center">
            <h1 class="display-4 fw-bold text-success mb-3">
                ¿Quiénes somos?
            </h1>
            <h2 class="text-secondary fw-semibold">
                Servicio Nacional de Aprendizaje
            </h2>
        </div>
    </div>
    <!-- Misión y Visión -->
    <div class="row g-2">
    <!-- MISIÓN -->
    <div class="col-12 col-md-4 mx-auto">
        <div class="card shadow h-100 border-0">
            <div class="card-header bg-success text-white text-center">
                <h3 class="mb-0">Misión</h3>
            </div>
            <div class="card-body">
                <p class="mb-0">
                    El Servicio Nacional de Aprendizaje (SENA) está encargado de cumplir la función
                    que corresponde al Estado de invertir en el desarrollo social y técnico de los
                    trabajadores colombianos, ofreciendo formación profesional integral para contribuir
                    al desarrollo económico, social y tecnológico del país.
                </p>
            </div>
        </div>
    </div>


    <!-- VISIÓN -->
    <div class="col-12 col-md-4 mx-auto">
        <div class="card shadow h-100 border-0">
            <div class="card-header bg-success text-white text-center">
                <h3 class="mb-0">Visión</h3>
            </div>
            <div class="card-body">
                <p class="mb-0">
                    Para el año 2026 el SENA continuará consolidándose como la entidad líder en
                    formación profesional integral, impulsando la innovación, la transformación
                    digital, el emprendimiento y la empleabilidad para fortalecer la competitividad
                    del país.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection