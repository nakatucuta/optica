

<div class="form-group">
	{!!Form::label('business_name','Nombre')!!}

	{!!Form::text('business_name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('nit','NIT')!!}

	{!!Form::text('nit',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
	{!!Form::label('adress','Direccion')!!}

	{!!Form::text('adress',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('social_object','Objeto Social')!!}

	{!!Form::text('social_object',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('Postal_Code','Codigo postal')!!}

	{!!Form::text('Postal_Code',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('email','Email')!!}

	{!!Form::text('email',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('phone_number','Numero de telefono')!!}

	{!!Form::text('phone_number',null,['class'=>'form-control'])!!}
</div>

<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('entity_types_id','Tipo de entidad')!!}
{!!Form::select('entity_types_id',$person,null,['id'=>'person','name'=>'entity_types_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>




<!--
	echo $persontc->address.'<br>';
	echo $persontc->phone.'<br>';
	echo $persontc->email.'<br>';
	echo $persontc->identification.'<br>'
	
	
?>;-->
<!-- <div class="form-group">
	{!!Form::label('person_id','foranea')!!}

	{!!Form::text('person_id',null,['class'=>'form-control'])!!}
</div> -->

<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>



<script>
$("#person").select2({

/*dropdownParent: $('#myModal')*/


});

</script>