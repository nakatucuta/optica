@if(Session::has('info'))

<div class="alert alert-info">

<button type="button" class="close" data-dismiss="alert">
&times;
	
</button>
	<strong>Guardado!</strong>{{Session::get('info')}}
</div>

@endif



@if(Session::has('error'))

<div class="alert alert-danger">

<button type="button" class="close" data-dismiss="alert">
&times;
	
</button>
	<strong>BORRADO!</strong>{{Session::get('error')}}
</div>

@endif


@if(Session::has('privilegios'))

<div class="alert alert-warning">

<button type="button" class="close" data-dismiss="alert">
&times;
	
</button>
	<strong>Sin Privilegios!</strong>{{Session::get('privilegios')}}
</div>

@endif