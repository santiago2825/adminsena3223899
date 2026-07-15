@extends('layouts.app')
@section('content')

    <h1>Actualizar Curso</h1>
    <form action="{{route('course.update', $course)}}" method="POST">
    @csrf
    @method('put')
        <label>
            numero de curso:
            <input type="number" name="course_number" value="{{old('course_number', $course->course_number)}}">
        </label>
        <br>
        <label>
            dia:
            <input type="date" name="day" value="{{old('day', $course->day)}}">
        </label>
        <br>
        <select name="area_id" >
            <option value="">Seleccionar área</option>
            @foreach ($areas as $area)
                <option value="{{ $area->id }}" {{ old('area_id', $course->area_id) == $area->id ? 'selected' : '' }}>
                    {{ $area->name }}
                </option>
            @endforeach
        </select>
        <br>
        <select name="training_center_id">
            <option value="">Seleccionar centro de formación</option>
            @foreach ($trainingCenters as $trainingCenter)
                <option value="{{ $trainingCenter->id }}" {{ old('training_center_id', $course->training_center_id) == $trainingCenter->id ? 'selected' : '' }}>
                    {{ $trainingCenter->name }}
                </option>
            @endforeach
        </select>
        <br><br>
        <button type="submit">Actualizar</button>
    </form>
@endsection