@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Nuevo Curso
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('course.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Número de Curso
                            </label>

                            <input
                                type="number"
                                name="course_number"
                                class="form-control"
                                placeholder="Ingrese el número del curso"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Día
                            </label>

                            <input
                                type="date"
                                name="day"
                                class="form-control"
                                required>
                        </div>

                        <div class="mb-3">
                            <label for="area_id" class="form-label fw-semibold">
                                Área
                            </label>

                            <select name="area_id" id="area_id" class="form-select" required>

                                <option value="">Seleccione un área</option>

                                @foreach($areas as $area)

                                    <option value="{{ $area->id }}">
                                        {{ $area->name }}
                                    </option>

                                @endforeach

                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="training_center_id" class="form-label fw-semibold">
                                Centro de Formación
                            </label>

                            <select name="training_center_id" id="training_center_id" class="form-select" required>

                                <option value="">Seleccione un centro de formación</option>

                                @foreach($training_centers as $training_center)

                                    <option value="{{ $training_center->id }}">
                                        {{ $training_center->name }}
                                    </option>

                                @endforeach

                            </select>
                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="{{ route('course.index') }}"
                               class="btn btn-secondary rounded-pill px-4">
                                Cancelar
                            </a>

                            <button
                                type="submit"
                                class="btn btn-success rounded-pill px-4">

                                <i class="fas fa-save me-1"></i>
                                Guardar

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection