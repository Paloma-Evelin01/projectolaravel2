<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Lista de estudiantes</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> 
</head>

<body>
     <div class="container">
        <h4>Lista de estudiantes</h4>
         <!---->
        <div class="col-xl-12">
	         <!--<form action="">-->
            <form action="{{route('Lista.index')}}" method= "get">

		         <div class="form row">
			      <div class="col sm-4">
				   <input type="text" class="form-control" name="texto">
			      </div>
			      <div class="col auto">
				   <input type="submit" class="btm btn-primary" value="buscar">
			      </div>
		         </div>
	            </form>
            </div-class-col>
            <!---->
           <div class="row">
             <div class="col-xl-12">
               <div class="table-responsive">
                  <table class="table table-striped">
                     <thead class="thead-light">
                         <tr>
<th> Matrícula</th>
<th> Nombre</th>
<th> Dirección </th>
<th> Acciones </th>
			</tr>
		    </thead>
		
            <tbody>
			@foreach ($estudiante as $estudiantes) 
			<tr>
    
<td>{{$estudiantes->Matricula}}</td>
<td>{{$estudiantes->Nombre}}</td>
<td>{{$estudiantes->Direccion}}</td>
<td> 

<td> 
<td>
 <a href="{{ route ('Lista.edit',"{$estudiantes->id}") }}" class="btn btn-primary btn-sm btn btn-warning btn-sm">Actualizar</a>
</td>


<td>
    <form method="POST" action="{{ url("Lista/{$estudiantes->id}") }}">
    @csrf
   	 @method('DELETE') 
    <button type="submit" onclick="return confirm ('¿Deseas Borrar?');">Eliminar</button>
    </form>
    </td>
			</tr>
			@endforeach
		</tbody>
		</table>
	    </div>
          </div-class-col>
       </div class>
     </div>   </body>
</html>
