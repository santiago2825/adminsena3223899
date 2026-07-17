@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Actualizar Instructor
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('teacher.update', $teacher) }}" method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Nombre del Instructor
                            </label>

                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                value="{{ old('name', $teacher->name) }}"
                                placeholder="Ingrese el nombre del instructor"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label fw-semibold">
                                Correo Electrónico
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                value="{{ old('email', $teacher->email) }}"
                                placeholder="Ingrese el correo electrónico"
                                required>

                        </div>

                        <div class="mb-3">

                            <label for="area_id" class="form-label fw-semibold">
                                Área
                            </label>

                            <select name="area_id" id="area_id" class="form-select" required>

                                <option value="">Seleccionar área</option>

                                @foreach($areas as $area)

                                    <option value="{{ $area->id }}"
                                        {{ old('area_id', $teacher->area_id) == $area->id ? 'selected' : '' }}>

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

                                <option value="">Seleccionar centro de formación</option>

                                @foreach($training_centers as $training_center)

                                    <option value="{{ $training_center->id }}"
                                        {{ old('training_center_id', $teacher->training_center_id) == $training_center->id ? 'selected' : '' }}>

                                        {{ $training_center->name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div class="d-flex justify-content-between">

                            <a href="{{ route('teacher.index') }}"
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