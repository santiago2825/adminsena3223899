@extends('layouts.app')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card border-0 shadow rounded-4">
                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Nuevo programa
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('program.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                Nombre
                            </label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                placeholder="Ingrese el nombre del programa"
                                required>
                        </div>

                        <div class="mb-4">
                            <label for="training_center_id" class="form-label fw-semibold">
                                Centro de formación
                            </label>
                            <!-- CORREGIDO: name="training_center_id" e id="training_center_id" -->
                            <select name="training_center_id" id="training_center_id" class="form-select" required>
                                <option value="">Seleccione un centro</option>
                                @foreach($training_centers as $training_center)
                                    <option value="{{ $training_center->id }}">
                                        {{ $training_center->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('program.index') }}"
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