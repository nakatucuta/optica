@include('Affiliation.fragments.error')
{!! Form::open(['route'=>'affiliation.create','method'=>'GET','autocomplete'=>'off','role'=>'search'])!!}<!-- ojo aqui en url debes especificar el nombre de la ruta en routes con el que llamas el controlador eje en este caso le pones como nombre legalentity a la ruta que apunta alcontrolador tal -->

<!-- OJOOO AQUI LO QUE DIFIERE ES QUE EN VEZ DE MANDAR  UNA URL ENVIAS UN ROUTE O UNA RUTA  Y LE QUITA EL ARRAY LO QUE PROVOCA QUE LE PUEDAS ENVIAR LA RUTA ESPECIFICA DONODE QUIERAS QUE SE IMPRIMA LA BUSQUEDA OVIAMENTE COPIANDO Y PEGANOD EL CONTENIDO DE LA INDEX COMO EN ESTE CASO SE LLAMA INDEXENCREATE QUE ES EL CONTENIDO DE LA INDEX QUE  COPIASTE Y PEGASTE EN CREATE -->
<div class="form-group">
<div class="input-group">

<input type="text" class="form-control" name="searchText" placeholder="buscar..." value="{{$searchText}}">
<span class ="input-group-btn">

<button id="color-search" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></button>


</span>

</div>

</div>

{{Form::close()}}