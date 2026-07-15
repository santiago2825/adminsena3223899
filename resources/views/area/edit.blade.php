@extends('layouts.app')
@section('content')
    <h1>Actualizar Área</h1>
    <form action="{{ route('area.update', $area) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{ old('name', $area->name) }}">
        </label>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
