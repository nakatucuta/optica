@if(count($errors))

<div class="alert alert-danger">

<button type="button" class="close" data-dismiss="alert"><!-- la etiqueta del mensaje del error -->
	&times;<!-- este hace la x para cerrar el mensaje -->
</button>

<ul>
	
	@foreach($errors->all() as $error)
		
		<li> {{ $error }}</li>

	@endforeach
</ul>
	
</div>

@endif