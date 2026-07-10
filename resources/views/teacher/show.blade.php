@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-success">
                    <div class="card-header bg-success text-white text-center">
                        <h2 class="mb-0">Información del Instructor</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Nombre Instructor</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $teacher->name }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Correo Electrónico</label>
                            <input
                                type="email"
                                class="form-control"
                                value="{{ $teacher->email }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Área</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $teacher->area->name }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Centro de Formación</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $teacher->training_Center->name }}"
                                readonly>
                        </div>
                        <div class="d-flex justify-content-center gap-2 mt-4">
                            <a href="{{ route('teacher.index') }}" class="btn btn-outline-success">
                                Volver
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection