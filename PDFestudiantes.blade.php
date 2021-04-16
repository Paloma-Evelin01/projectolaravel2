<!DOCTYPE html>

    <html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Document</title>
</head>

<body>
<table class="table table-striped">
    <thead class="thead-light">
    <tr>
    <th> Matrícula</th>
    <th> Nombre</th>
    <th> Dirección </th>
    </tr>
</thead>

<tbody>
@foreach ($estudiante as $estudiantes)

<tr>
<td>{{$estudiantes->Matricula}}</td>

<td>{{$estudiantes->Nombre}}</td>

<td>{{$estudiantes->Direccion}}</td>
</tr>

@endforeach

</tbody>

</table>
</body>
</html>