@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')
	<div class="container">
<div class="col-sm-8">


<div class="row">
        <div class="col-md-10 col-md-offset-4">
            <ol class="breadcrumb">
        <li><a href="{{ route('service.index')}}">Servicios</a></li>
        
        <li class="active">Eliminar Servicios</li>
    </ol>
            <div class="panel panel-info">
                <div class="panel-heading">
                    Editar producto
                </div>

                <div class="panel-body">

{!! Form::open(['route'=>['service.destroy',$serviceshow->id],'method'=>'DELETE']) !!}

                    <div class="form-group">
                        <label form="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO?</label>

                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $serviceshow->id !!} 
                    </div>


                    <div class="form-group">
                        {!! form::label('Nombre de servicio:') !!}
                        {!! $categorias->name_service !!}
                    </div>

					
                    <div class="form-group">
                        {!! form::label('Valor:') !!}
                        {!! $serviceshow->value_service !!}
                    </div>

                    <div class="form-group">
                        {!! form::label('Tipo de servicio:') !!}
                        {!! $categorias->tiposervicio !!}
                    </div>

                   


                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}
						
                    <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('service.index')}}'"
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