@extends('layouts.app')
@section('content')
    <h1>Actualizar Instructor</h1>
    <form action="{{ route('teacher.update', $teacher) }}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre Instructor:
            <input type="text" name="name" value="{{ old('name', $teacher->name) }}">
        </label>
        <br><br>
        <label>
            email:
            <input type="email" name="email" value="{{ old('email', $teacher->email) }}">
        </label>
        <br><br>
        <label for="area_id">Area:</label>
        <select name="area_id" id="area_id" class="form-control">
            <option value="">Seleccionar área</option>
            @foreach($areas as $area)
                <option value="{{$area->id}}" {{ old('area_id', $teacher->area_id) == $area->id ? 'selected' : '' }}>
                    {{$area->name}}
                </option>
            @endforeach
        </select>
        <br><br>
        <label for="training_center_id">Centro de Formacion:</label>
        <select name="training_center_id" id="training_center_id" class="form-control">
            <option value="">Seleccionar centro de formacion</option>
            @foreach($training_centers as $training_center)
                <option value="{{$training_center->id}}" {{ old('training_center_id', $teacher->training_center_id) == $training_center->id ? 'selected' : '' }}>
                    {{$training_center->name}}
                </option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection