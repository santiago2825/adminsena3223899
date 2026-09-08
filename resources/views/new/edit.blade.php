@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-header bg-success text-white p-4 border-0">
                        <h2 class="mb-0 fw-bold">
                            <i class="fas fa-edit me-2"></i>
                            Editar noticia
                        </h2>
                    </div>
                    <div class="card-body p-4 p-md-5">
                        <form action="{{ route('new.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            {{-- Título --}}
                            <div class="mb-4">
                                <label for="title" class="form-label fw-semibold">
                                    Título
                                </label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $news->title }}" required>
                            </div>
                            {{-- Descripción --}}
                            <div class="mb-4">
                                <label for="description" class="form-label fw-semibold">
                                    Descripción
                                </label>
                                <textarea class="form-control" id="description" name="description" rows="5" required>{{ $news->description }}</textarea>
                            </div>
                            <!-- 1. Opción para borrar la imagen actual (sin mostrar la foto) -->
                            @if ($news->image)
                                <div style="margin-bottom: 15px;">
                                    <label>
                                        <input type="checkbox" name="delete_image" value="1">
                                        Eliminar la imagen actual
                                    </label>
                                </div>
                            @endif
                            <!-- 2. Campo para subir una nueva imagen -->
                            <div style="margin-bottom: 15px;">
                                <label for="image">Cambiar o subir imagen:</label>
                                <input type="file" name="image" id="image">
                            </div>
                            {{-- Fecha --}}
                            <div class="mb-4">
                                <label for="date" class="form-label fw-semibold">
                                    Fecha
                                </label>
                                <input type="date" class="form-control" id="date" name="date"
                                    value="{{ $news->date }}" required>
                            </div>
                            {{-- Botones --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('new.index') }}" class="btn btn-secondary rounded-pill px-4">
                                    <i class="fas fa-arrow-left me-2"></i>
                                    Cancelar
                                </a>
                                <button type="submit" class="btn btn-success rounded-pill px-4">
                                    <i class="fas fa-save me-2"></i>
                                    Guardar cambios
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
