@extends('layouts.app')

@section('content')
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">

                <div class="card border-0 shadow-sm rounded-4 overflow-hidden">

                    {{-- Encabezado --}}
                    <div class="card-body p-4 p-md-5">

                        <div class="text-center mb-4">
                            <h1 class="fw-bold text-success mb-2">
                                {{ $news->title }}
                            </h1>

                            <span class="badge bg-light text-secondary">
                                Noticia
                            </span>
                        </div>

                        {{-- Imagen --}}
                        <div class="text-center mb-4">
                            @if ($news->image)
                                <img src="{{ asset('storage/images/' . $news->image) }}" alt="Imagen de {{ $news->title }}"
                                    class="img-fluid rounded-4 shadow-sm" style="max-height: 200px;">
                            @else
                                <div class="alert alert-secondary mb-0">
                                    <i class="fas fa-image me-2"></i>
                                    Esta noticia no tiene imagen.
                                </div>
                            @endif
                        </div>

                        {{-- Descripción --}}
                        <div class="mb-4">
                            <h5 class="fw-bold text-dark mb-3">
                                Descripción
                            </h5>

                            <p class="text-secondary mb-0">
                                {{ $news->description }}
                            </p>
                        </div>

                        {{-- Fecha --}}
                        <div class="border-top pt-3 mb-4">
                            <div class="d-flex align-items-center text-secondary">
                                <i class="fas fa-calendar-alt text-success me-2"></i>

                                <span>
                                    <strong>Fecha:</strong>
                                    {{ $news->date }}
                                </span>
                            </div>
                        </div>

                        {{-- Botón volver --}}
                        <div class="text-center">
                            <a href="{{ route('new.index') }}" class="btn btn-secondary rounded-pill px-4">
                                <i class="fas fa-arrow-left me-2"></i>
                                Volver
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>
@endsection
