

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
                    Editar producto
                </div>

                <div class="panel-body">

{!! Form::open(['route'=>['legalentity.destroy',$entityshow->id],'method'=>'DELETE']) !!}

                    <div class="form-group">
                        <label form="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO?</label>

                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $entityshow->id !!}
                    </div>


                    <div class="form-group">
                        {!! form::label('Nombre') !!}
                        {!! $entityshow->business_name !!}
                    </div>

					
                    <div class="form-group">
                        {!! form::label('objeto social') !!}
                        {!! $entityshow->social_object !!}
                    </div>

					
                    <div class="form-group">
                        {!! form::label('codigo postal') !!}
                        {!! $entityshow->Postal_Code !!}
                    </div>

					
                   

                    <div class="form-group">
                        {!! form::label('tipo entidad') !!}
                        {!! $categorias->nn !!}
                    </div>



                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}
						
                    <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('legalentity.index')}}'"
                    >Cancelar</button>
                    {!! Form::close() !!}

<div class="col-sm-4">
<h3>&nbsp</h3>
	
	
</div>

</div>
            </div>
        </div>
    </div>
@stop