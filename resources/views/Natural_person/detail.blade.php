@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')
	<div class="container">
<div class="col-sm-8">


<div class="row">
        <div class="col-md-10 col-md-offset-4">

            <div class="panel panel-info">
                <div class="panel-heading">
                    Detalle
                </div>

                <div class="panel-body">

{!! Form::open(['route'=>['natural_person.destroy',$naturalshow->id],'method'=>'DELETE']) !!}

                    <div class="form-group">
                        <label form="exampleInputPassword1">Detalle de Persona</label>

                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $naturalshow->id !!} 
                    </div>


                    <div class="form-group">
                        {!! form::label('TIP ID:') !!}
                        {!! $categorias->tip !!}
                    </div>

					
                    <div class="form-group">
                        {!! form::label('identificasion:') !!}
                        {!! $naturalshow->identification !!}
                    </div>

                     <div class="form-group">
                        {!! form::label('Nombre:') !!}
                        {{ $categorias->nombre.' '.$categorias->segundo.' '.$categorias->apelli.' '.$categorias->ape2}}
                    </div>
                    
					
                    <div class="form-group">
                        {!! form::label('Fecha nacimiento:') !!}
                        {!! $naturalshow->date_of_birth !!}
                    </div>

					
                  

					<div class="form-group">
                        {!! form::label('Telefono:') !!}
                        {!! $naturalshow->phone_number !!}
                    </div>
                    <div class="form-group">
                        {!! form::label('Ocupaccion:') !!}
                        {!! $naturalshow->occupation !!}
                    </div>
                    <div class="form-group">
                        {!! form::label('Genero:') !!}
                        {!! $categorias->gen !!}
                    </div>
                    <div class="form-group">
                        {!! form::label('email:') !!}
                        {!! $naturalshow->email !!}
                    </div>
                     <div class="form-group">
                        {!! form::label('Direccion:') !!}
                        {!! $naturalshow->address !!}
                    </div>



                   
						
                    <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('natural_person.index')}}'"
                    >Volver</button>
                    {!! Form::close() !!}

<div class="col-sm-4">
<h3>&nbsp</h3>
	
	
</div>

</div>
            </div>
        </div>
    </div>
@stop