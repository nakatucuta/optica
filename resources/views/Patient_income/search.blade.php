
{!! Form::open(['route'=>'income','method'=>'GET','autocomplete'=>'off','role'=>'search'])!!}<!-- ojo aqui en url debes especificar el nombre de la ruta en routes con el que llamas el controlador eje en este caso le pones como nombre legalentity a la ruta que apunta alcontrolador tal -->
<div class="form-group">
<div class="input-group">

<input type="text" class="form-control" name="query" placeholder="buscar..." >
<span class ="input-group-btn">

<button  type="submit" class="btn btn-primary"><span class="icon-search"></button>


</span>

</div>

</div>


{{Form::close()}}