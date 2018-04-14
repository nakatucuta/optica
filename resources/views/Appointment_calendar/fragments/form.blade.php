

<div class="form-group">
	{!!Form::label('date','Fecha de cita')!!}

	{!!Form::date('date',\Carbon\Carbon::now(),['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('time','Hora')!!}

	{!!Form::time('time',null,['class'=>'form-control'])!!}
</div>





<div class="form-group">
{!!Form::label('state_id','Estado')!!}

{!!Form::select('state_id',$person2,'1',['id'=>'personl','class'=>'form-control selectpiker'])  !!}
</div>






  <div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('affiliation_id','Afiliacion')!!}
<script> console.log( <?php echo json_encode( $person2 )  ?>)</script>
{!!Form::select('affiliation_id',$person,null,['id'=>'person','name'=>'affiliation_id','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>






<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('user_id','Empleado')!!}

{!!Form::select('user_id',$person1,null,['id'=>'person1','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>


<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>

<script>
$("#person").select2({

})

$("#person1").select2({

})

$("#affiliation_id ").selectpicker({

	
})










/* $('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });*/
</script>



