

<div class="form-group">
	{!!Form::label('description_income','Descripcion Ingreso')!!}

	{!!Form::text('description_income',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('companion','Acompanante')!!}

	{!!Form::text('companion',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('companion_phone_number','Numero de Acompanante')!!}

	{!!Form::text('companion_phone_number',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('kinship','Parentesco')!!}

	{!!Form::text('kinship',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('responsible','Responsable')!!}

	{!!Form::text('responsible',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('phone_responsible','Numero Responsable')!!}

	{!!Form::text('phone_responsible',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('relationship_resposible','Relacion con Responsable')!!}

	{!!Form::text('relationship_resposible',null,['class'=>'form-control'])!!}
</div>




  <div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('appointment_calendar_id','Cita')!!}
{!!Form::select('appointment_calendar_id',$person,null,['id'=>'person','name'=>'appointment_calendar_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>


  <div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('service_id','Servicio')!!}
{!!Form::select('service_id',$person1,null,['id'=>'person1','name'=>'service_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>



  <div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('service_order_id','Orden De Servicio')!!}
{!!Form::select('service_order_id',$person2,null,['id'=>'person2','name'=>'service_order_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>









<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}

	<button type="button" class="btn btn-primary pull-right "  id="color-boton" name="cancelar" 
                            onClick="location.href='{{ route('patient_income.index')}}'"
                    >volver</button>
</div>

<script>
$("#person").select2({

/*dropdownParent: $('#myModal')*/


});


$("#person1").select2({

/*dropdownParent: $('#myModal')*/


});

$("#person2").select2({

/*dropdownParent: $('#myModal')*/


});



</script>



