



<div class="form-group">
{!!Form::label('identification_description_id','tipid')!!}

{!!Form::select('identification_description_id',$person,null,['id'=>'person','class'=>'form-control selectpiker'])  !!}
</div>

<div class="form-group">
	{!!Form::label('identification','Identificasion')!!}

	{!!Form::text('identification',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">
	{!!Form::label('first_name','Primer nombre')!!}

	{!!Form::text('first_name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('second_name',' Segundo nombre')!!}

	{!!Form::text('second_name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('surname','Apellido')!!}

	{!!Form::text('surname',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('second_surname','Segundo apellido')!!}

	{!!Form::text('second_surname',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('date_of_birth','Fecha de Nacimiento')!!}

	{!!Form::date('date_of_birth',\Carbon\Carbon::now(),['class'=>'form-control'])!!}
</div>



<!-- div class="form-group">
	{!!Form::label('date_of_birth','Fecha')!!}
		
	{!!Form::date('date_of_birth',null,['name'=>'date_of_birth','class'=>'form-control datepicker'])!!}
</div> -->


<div class="form-group">
	{!!Form::label('phone_number','Numero de telefono')!!}

	{!!Form::text('phone_number',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('occupation','Ocupaccion')!!}

	{!!Form::text('occupation',null,['class'=>'form-control'])!!}
</div>



<div class="form-group">
{!!Form::label('genders_id','genero')!!}

{!!Form::select('genders_id',$person1,null,['id'=>'person','class'=>'form-control selectpiker'])  !!}
</div>

<div class="form-group">
	{!!Form::label('email','Correo')!!}

	{!!Form::text('email',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('address','Direccion')!!}

	{!!Form::text('address',null,['class'=>'form-control'])!!}
</div>


<div class="input-field col s8">
					{!! Form::label('image', 'Imagen del usuario:') !!}
					{!!Form::file('image',['class' => 'file-field input-field'])!!}
 
 				</div>



<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>






