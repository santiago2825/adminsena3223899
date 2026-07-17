@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Actualizar Curso
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('course.update', $course) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Número de Curso
                            </label>

                            <input
                                type="number"
                                name="course_number"
                                class="form-control"
                                value="{{ old('course_number', $course->course_number) }}"
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
                                value="{{ old('day', $course->day) }}"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Área
                            </label>

                            <select name="area_id" class="form-select" required>

                                <option value="">Seleccionar área</option>

                                @foreach ($areas as $area)

                                    <option value="{{ $area->id }}"
                                        {{ old('area_id', $course->area_id) == $area->id ? 'selected' : '' }}>

                                        {{ $area->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="mb-4">

                            <label class="form-label fw-semibold">
                                Centro de Formación
                            </label>

                            <select name="training_center_id" class="form-select" required>

                                <option value="">Seleccionar centro de formación</option>

                                @foreach ($training_centers as $trainingcenter)

                                    <option value="{{ $trainingcenter->id }}"
                                        {{ old('training_center_id', $course->training_center_id) == $trainingcenter->id ? 'selected' : '' }}>

                                        {{ $trainingcenter->name }}

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
                                Actualizar

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection