

<div class="form-group">
	{!!Form::label('name_service','Nombre servicio')!!}

	{!!Form::text('name_service',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('value_service','Valor')!!}

	{!!Form::text('value_service',null,['class'=>'form-control'])!!}
</div>












  <div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('type_service_id','Tipo de servicio')!!}

{!!Form::select('type_service_id',$person,null,['id'=>'person','name'=>'type_service_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>










<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>

<script>
$("#person").select2({

})

</script>



