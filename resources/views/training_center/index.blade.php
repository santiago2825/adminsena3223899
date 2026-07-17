@extends('layouts.app')
@section('content')
<div class="container py-5">
    <!-- Encabezado -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-success mb-1">
                Gestión de Centros de Formación
            </h1>
            <p class="text-secondary mb-0">
                Administra los centros de formación registrados en el sistema.
            </p>
        </div>
        <a href="{{ route('training_center.create') }}"
            class="btn btn-success btn-sm rounded-pill px-3 shadow-sm">
            <i class="fas fa-plus"></i>
            Nuevo Centro
        </a>
    </div>
    <!-- Tabla -->
    <div class="card border-0 shadow rounded-4 overflow-hidden">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($trainingcenters as $trainingcenter)
                <tr>
                    <td>{{ $trainingcenter->id }}</td>
                    <td class="fw-semibold">
                        {{ $trainingcenter->name }}
                    </td>
                    <td>{{ $trainingcenter->location }}</td>
                    <td class="text-center">
                        <a href="{{ route('training_center.show', $trainingcenter->id) }}"
                            class="btn btn-primary btn-sm rounded-circle">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('training_center.edit', $trainingcenter->id) }}"
                            class="btn btn-warning btn-sm rounded-circle text-white">
                            <i class="fas fa-pen"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('training_center.destroy', $trainingcenter->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm rounded-circle">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection