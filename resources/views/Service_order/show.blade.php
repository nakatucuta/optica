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
        <li><a href="{{ route('service_order.index')}}">Autorisaciones</a></li>
        
        <li class="active">Eliminar Autorisacion</li>
    </ol>
            <div class="panel panel-info">
                <div class="panel-heading">
                    Editar producto
                </div>

                <div class="panel-body">

{!! Form::open(['route'=>['service_order.destroy',$service_ordershow->id],'method'=>'DELETE']) !!}

                    <div class="form-group">
                        <label form="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO?</label>

                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $service_ordershow->id !!} 
                    </div>




                    <div class="form-group">
                        {!! form::label('Codigo de Autorisacion:') !!}
                        {!! $service_ordershow->code !!}
                    </div>

					
                    <div class="form-group">
                        {!! form::label('Fecha:') !!}
                        {!! $service_ordershow->date_order !!}
                    </div>

                    <div class="form-group">
                        {!! form::label('Descripcion:') !!}
                        {!! $service_ordershow->description !!}
                    </div>

                    <div class="form-group">
                        {!! form::label('Valor:') !!}
                        {!! $service_ordershow->value_to_pay !!}
                    </div>

                   <div class="form-group">
                        {!! form::label('Paciente:') !!}
                        {{ $categorias->nombre.' '. $categorias->segundo.' '. $categorias->apellido1.' '. $categorias->apellido2}}
                    </div>


                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}
						
                    <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('service_order.index')}}'"
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