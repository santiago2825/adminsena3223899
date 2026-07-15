@extends('layouts.app')
@section('content')
    <h1>actualizar aprendiz</h1>
    <form action="{{route('product.update', $product)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $product->name)}}">
        </label>
        <br>
        <label>
            email:
            <input type="email" name="email" value="{{old('email', $product->email)}}">
        </label>
        <br>
        <label>
            telefono:
            <input type="number" name="cell_number" value="{{old('cell_number', $product->cell_number)}}">
        </label>
        <br>
        <select name="course_id" >
            <option value="">Seleccionar curso</option>
            @foreach ($courses as $course)
                <option value="{{ $course->id }}" {{ old('course_id', $product->course_id) == $course->id ? 'selected' : '' }}>
                    {{ $course->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <select name="computer_id">
            <option value="">Seleccionar computador</option>
            @foreach ($computers as $computer)
                <option value="{{ $computer->id }}" {{ old('computer_id', $product->computer_id) == $computer->id ? 'selected' : '' }}>
                    {{ $computer->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection








