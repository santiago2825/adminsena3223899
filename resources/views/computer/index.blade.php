@extends('layouts.app')

@section('content')

<div class="container py-5">

    <!-- Encabezado -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h1 class="fw-bold text-success mb-1">
                Gestión de Computadores
            </h1>

            <p class="text-secondary mb-0">
                Administra los computadores registrados en el sistema.
            </p>
        </div>

        <a href="{{ route('computer.create') }}"
            class="btn btn-success btn-sm rounded-pill px-3 shadow-sm">

            <i class="fas fa-plus-circle me-1"></i>
            Nuevo Computador

        </a>

    </div>

    <!-- Tabla -->
    <div class="card border-0 shadow rounded-4 overflow-hidden">

        <table class="table table-hover align-middle mb-0">

            <thead class="table-dark text-center">

                <tr>
                    <th>ID</th>
                    <th>Número</th>
                    <th>Marca</th>
                    <th colspan="2">Acciones</th>
                </tr>

            </thead>

            <tbody>

                @foreach($computers as $computer)

                <tr>

                    <td>{{ $computer->id }}</td>

                    <td class="fw-semibold">
                        {{ $computer->number }}
                    </td>

                    <td>{{ $computer->brand }}</td>

                    <td class="text-center">

                        <a href="{{ route('computer.show', $computer->id) }}"
                            class="btn btn-primary btn-sm rounded-circle">

                            <i class="fas fa-eye"></i>

                        </a>

                    </td>

                    <td class="text-center">

                        <a href="{{ route('computer.edit', $computer->id) }}"
                            class="btn btn-warning btn-sm rounded-circle text-white">

                            <i class="fas fa-pen"></i>

                        </a>

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

@endsection