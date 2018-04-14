

<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('natural_person_id','Persona natural')!!}

{!!Form::select('natural_person_id',$person,null,['id'=>'person','name'=>'natural_person_id','class'=>'form-control selectpicker','style'=>'width: 100%'])  !!}
</div>
</div>
</div>



<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('legal_entity_id','Persona juridica')!!}

{!!Form::select('legal_entity_id',$person1,null,['id'=>'person1','class'=>'form-control selectpicker','style'=>'width: 100%'])  !!}
</div>
</div>
</div>
<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary', 'id'=>'color-boton-modal'])!!}
</div>


<!-- <div class="form-group">
	{!!Form::label('first_name','Fecha')!!}
		
	{!!Form::text('first_name',null,['name'=>'date','class'=>'form-control datepicker'])!!}
</div> -->



<script>
$("#person").select2({

})

$("#person1").select2({

})


/* $('.datepicker').datepicker({
        format: "yyyy/mm/dd",
        language: "es",
        autoclose: true
    });*/
</script>

