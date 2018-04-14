

<div class="form-group">
	{!!Form::label('return_date','Fecha Devolucion')!!}

	{!!Form::date('return_date',\Carbon\Carbon::now(),['class'=>'form-control'])!!}
</div>


<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('product_id','Articulo')!!}
{!!Form::select('product_id',$person,null,['id'=>'person','name'=>'product_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>

<div class="form-group">
	{!!Form::label('quantity','Cantidad')!!}

	{!!Form::number('quantity',null,['class'=>'form-control'])!!}
</div>




<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('cart_id','Codigo Factura')!!}
{!!Form::select('cart_id',$person2,null,['id'=>'person2','name'=>'cart_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>


<div class="form-group">
	{!!Form::label('description','Descripcion')!!}

	{!!Form::textarea('description',null,['class'=>'form-control'])!!}
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
$("#person").select2({

/*dropdownParent: $('#myModal')*/


});




$("#person2").select2({

/*dropdownParent: $('#myModal')*/


});


/*$("#person3").select2({

dropdownParent: $('#myModal')


});*/



</script>