@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow border-success">
                    <div class="card-header bg-success text-white text-center">
                        <h2 class="mb-0">Información del Curso</h2>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Número de Curso</label>
                            <input
                                type="number"
                                class="form-control"
                                value="{{ $course->course_number }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Fecha</label>
                            <input
                                type="date"
                                class="form-control"
                                value="{{ $course->day }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Área</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $course->area->name }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Centro de Formación</label>
                            <input
                                type="text"
                                class="form-control"
                                value="{{ $course->training_Center->name }}"
                                readonly>
                        </div>
                        <div class="d-flex justify-content-center gap-2 mt-4">
                            <a href="{{ route('course.index') }}" class="btn btn-outline-success">
                                Volver
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection