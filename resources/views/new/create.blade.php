@extends('layouts.app')
@section('content')
    <div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card border-0 shadow rounded-4">

                <div class="card-header bg-success text-white text-center fw-bold fs-4">
                    Nueva noticia
                </div>

                <div class="card-body p-4">

                    <form action="{{ route('new.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                titulo
                            </label>

                            <input
                                type="text"
                                name="title"
                                class="form-control"
                                placeholder="Ingrese el titulo "
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                imagen
                            </label>
                            <input
                                type="file"
                                name="image"
                                class="form-control"
                                placeholder="Ingrese su imagen">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                descripcion
                            </label>
                            <input
                                type="text"
                                name="description"
                                class="form-control"
                                placeholder="Ingrese su descripcion"
                                required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">
                                fecha
                            </label>
                            <input
                                type="date"
                                name="date"
                                class="form-control"
                                placeholder="Ingrese la fecha"
                                required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('new.index') }}"
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
