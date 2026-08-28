@extends('layouts.app')
@section('content')
<div class="container py-5">
    <!-- Encabezado Principal -->
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-success mb-3">
            ¿Quiénes somos?
        </h1>
        <h2 class="text-secondary fw-semibold mb-4">
            Servicio Nacional de Aprendizaje (SENA)
        </h2>
        <p class="lead text-muted mx-auto" style="max-width: 700px;">
            Institución pública dedicada a brindar formación gratuita y de alta calidad para impulsar el desarrollo social, técnico y económico de Colombia.
        </p>
    </div>

    <!-- Misión y Visión -->
    <div class="row g-4 mb-5">
        <!-- MISIÓN -->
        <div class="col-12 col-md-6">
            <div class="card shadow-sm h-100 border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-success text-white text-center py-3">
                    <h3 class="mb-0 fs-4 fw-semibold"><i class="fas fa-bullseye me-2"></i>Misión</h3>
                </div>
                <div class="card-body p-4 d-flex align-items-center">
                    <p class="text-secondary mb-0">
                        El Servicio Nacional de Aprendizaje (SENA) está encargado de cumplir la función que corresponde al Estado de invertir en el desarrollo social y técnico de los trabajadores colombianos, ofreciendo y ejecutando la formación profesional integral, para la incorporación y el desarrollo de las personas en actividades productivas que contribuyan al desarrollo social, económico y tecnológico del país.
                    </p>
                </div>
            </div>
        </div>

        <!-- VISIÓN -->
        <div class="col-12 col-md-6">
            <div class="card shadow-sm h-100 border-0 rounded-4 overflow-hidden">
                <div class="card-header bg-success text-white text-center py-3">
                    <h3 class="mb-0 fs-4 fw-semibold"><i class="fas fa-eye me-2"></i>Visión</h3>
                </div>
                <div class="card-body p-4 d-flex align-items-center">
                    <p class="text-secondary mb-0">
                        Para el año 2026 el SENA se consolidará como una entidad referente de formación por competencias, impulsando la innovación, la transformación digital, el emprendimiento y la empleabilidad, respondiendo con agilidad a las dinámicas del mercado laboral global y fortaleciendo la competitividad de todas las regiones de Colombia.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Valores Corporativos -->
    <div class="mb-5">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-dark">Nuestros Valores</h3>
            <p class="text-muted">Principios que guían nuestra labor diaria con la comunidad</p>
        </div>
        <div class="row g-3">
            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 p-3 text-center">
                    <div class="card-body">
                        <div class="text-success fs-2 mb-3">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4 class="h5 fw-bold text-dark">Compromiso</h4>
                        <p class="text-muted small mb-0">Disposición de servir con excelencia, responsabilidad y sentido de pertenencia institucional.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 p-3 text-center">
                    <div class="card-body">
                        <div class="text-success fs-2 mb-3">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="h5 fw-bold text-dark">Innovación</h4>
                        <p class="text-muted small mb-0">Búsqueda constante de soluciones creativas y tecnológicas para responder a los retos del futuro.</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="card border-0 shadow-sm h-100 rounded-4 p-3 text-center">
                    <div class="card-body">
                        <div class="text-success fs-2 mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h4 class="h5 fw-bold text-dark">Respeto</h4>
                        <p class="text-muted small mb-0">Reconocimiento de la dignidad humana, la diversidad y los derechos de cada miembro de la comunidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Objetivos Estratégicos -->
    <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 bg-white">
        <div class="text-center mb-4">
            <h3 class="fw-bold text-success">Objetivos Estratégicos</h3>
            <p class="text-muted">Pilares que guían nuestro impacto en la sociedad</p>
        </div>
        <div class="row g-4">
            <div class="col-12 col-md-4 text-center">
                <div class="bg-success-subtle text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fas fa-graduation-cap fs-4"></i>
                </div>
                <h4 class="h6 fw-bold text-dark">Cobertura y Calidad</h4>
                <p class="small text-muted mb-0">Ampliar el acceso a la educación técnica y tecnológica adaptada a las demandas reales del sector productivo.</p>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="bg-success-subtle text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fas fa-laptop-code fs-4"></i>
                </div>
                <h4 class="h6 fw-bold text-dark">Modernización Tecnológica</h4>
                <p class="small text-muted mb-0">Actualizar constantemente la infraestructura de laboratorios y equipos de cómputo para los aprendices.</p>
            </div>
            <div class="col-12 col-md-4 text-center">
                <div class="bg-success-subtle text-success rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px;">
                    <i class="fas fa-briefcase fs-4"></i>
                </div>
                <h4 class="h6 fw-bold text-dark">Empleabilidad y Emprendimiento</h4>
                <p class="small text-muted mb-0">Fomentar la creación de nuevas empresas y facilitar la inserción laboral de los egresados en el mercado.</p>
            </div>
        </div>
    </div>
</div>
@endsection