

<div class="form-group">
	{!!Form::label('code','codigo')!!}

	{!!Form::text('code',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('date_order','Fecha')!!}

	{!!Form::date('date_order',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('description','Descripcion')!!}

	{!!Form::text('description',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
	{!!Form::label('value_to_pay','Valor')!!}

	{!!Form::text('value_to_pay',null,['class'=>'form-control','method'=>'POST','name'=>'value_to_pay'])!!}
</div>


 <div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('affiliation_id','Paciente')!!}
{!!Form::select('affiliation_id',$person,null,['id'=>'person','name'=>'affiliation_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>


<script>
$("#person").select2({

/*dropdownParent: $('#myModal')*/


});

</script>
















<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>





