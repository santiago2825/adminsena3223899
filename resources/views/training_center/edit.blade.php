@extends('layouts.app')
@section('content')
    <h1>actualizar centro de formacion</h1>
    <form action="{{route('training_center.update', $trainingCenter)}}" method="POST">
    @csrf
    @method('put')
    <label >nombre:
        <input type="text" name="name" value="{{old('name', $trainingCenter->name)}}">
    </label>
    <br>
    <label >direccion:
        <input type="text" name="location" value="{{old('location', $trainingCenter->location)}}">
    </label>
    <br><br>
    <button type="submit">Actualizar</button>
</form>
@endsection