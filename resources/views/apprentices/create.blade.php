<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aprendices</title>
</head>
<body>
    <form action="{{route('apprentice.store')}}" method="POST" enctype="multipart/form-data">
        @csrf 

        <label>
            nombre:
            <br>
            <input type="text" name="name">
        </label>
        <br>
        <label>
            email:
            <br>
            <input type="email" name="day">
        </label>
        <br>
        <label for="course_id">curso</label>
        <select name="course_id" id="courso_id" class="form-control">
            <option value="">cursos</option>
            @foreach($courses as $course)
            <option value="{{$course->id}}">
                {{$training_center->number}}
            </option>
            @endforeach
        </select>
        <br><br>
        <label for="computer_id">id centro fromacion</label>
        <select name="computer_id" id="computer_id" class="form-control">
            <option value="">seleccione un computador</option>
            @foreach($computers as $computer)
            <option value="{{$computer->id}}">
                {{$computer->number}}
            </option>
            @endforeach
        </select>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>