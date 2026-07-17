@extends('layouts.app')

@section('content')

<div class="container py-5">
    <!-- Encabezado -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="fw-bold text-success mb-1">
                Gestión de Aprendices
            </h1>
            <p class="text-secondary mb-0">
                Administra los aprendices registrados en el sistema.
            </p>
        </div>
        <a href="{{ route('apprentices.create') }}"
            class="btn btn-success btn-sm rounded-pill px-3 shadow-sm">
            <i class="fas fa-plus"></i>
            Nuevo Aprendiz
        </a>
    </div>
    <!-- Tabla -->
    <div class="card border-0 shadow rounded-4 overflow-hidden">
        <table class="table table-hover align-middle mb-0">
            <thead class="table-dark text-center">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Curso</th>
                    <th>Computador</th>
                    <th colspan="3">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($apprentices as $apprentice)
                <tr>
                    <td>{{ $apprentice->id }}</td>
                    <td class="fw-semibold">
                        {{ $apprentice->name }}
                    </td>
                    <td>{{ $apprentice->email }}</td>
                    <td>{{ $apprentice->cell_number }}</td>
                    <td>{{ $apprentice->course->course_number }}</td>
                    <td>{{ $apprentice->computer->brand }}</td>
                    <td class="text-center">
                        <a href="{{ route('apprentices.show', $apprentice->id) }}"
                            class="btn btn-primary btn-sm rounded-circle">
                            <i class="fas fa-eye"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('apprentices.edit', $apprentice->id) }}"
                            class="btn btn-warning btn-sm rounded-circle text-white">
                            <i class="fas fa-pen"></i>
                        </a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('apprentices.destroy', $apprentice->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm rounded-circle"
                                onclick="return confirm('¿Estás seguro de eliminar este aprendiz?')">
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