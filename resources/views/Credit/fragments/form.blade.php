

<div class="form-group">
	{!!Form::label('date','Fecha Abono')!!}

	{!!Form::date('date',\Carbon\Carbon::now(),['class'=>'form-control'])!!}
</div>




<div class="form-group">
	{!!Form::label('value','Valor Abonar')!!}

	{!!Form::number('value',null,['class'=>'form-control'])!!}
</div>




<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('cart_id','Codigo Factura')!!}
{!!Form::select('cart_id',$person2,null,['id'=>'person2','name'=>'cart_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>






<!-- <div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('user_id','Empleado')!!}
{!!Form::select('user_id',$person3,null,['id'=>'person3','name'=>'user_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div> -->
 








<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>





<script>


$("#person2").select2({

/*dropdownParent: $('#myModal')*/


});


/*$("#person3").select2({

dropdownParent: $('#myModal')


});*/



</script>