<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teacher</title>
</head>
<body>
    <form action="{{route('teacher.store')}}" method="POST" enctype="multipart/form-data">
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
            <input type="email" name="email">
        </label>
        <br>
        <label for="training_center_id">id centro fromacion</label>
        <select name="training_center_id" id="training_center_id" class="form-control">
            <option value="">seleccione un centro de formacion</option>
            @foreach($training_centers as $training_center)
            <option value="{{$training_center->id}}">
                {{$training_center->number}}
            </option>
            @endforeach
        </select>
        <br><br>
        <label for="area_id">area</label>
        <select name="area_id" id="area_id" class="form-control">
            <option value="">seleccione un centro de formacion</option>
            @foreach($areas as $area)
            <option value="{{$area->id}}">
                {{$area->number}}
            </option>
            @endforeach
        </select>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>