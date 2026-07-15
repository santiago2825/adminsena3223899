@extends('layouts.app')
@section('content')
    <h1>Actualizar Computadora</h1>
    <form action="{{ route('computer.update', $computer) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Numero de serie:
            <input type="number" name="number" value="{{ old('number', $computer->number) }}">
        </label>
        <br>
        <label>
            Marca:
            <input type="text" name="brand" value="{{ old('brand', $computer->brand) }}">
        </label>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection
