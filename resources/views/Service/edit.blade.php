@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')
@include('Service.fragments.error')


<style>
	#person{

	width: 550%;
	
padding: 500px;

}

   
</style>
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
        	<ol class="breadcrumb">
        <li><a href="{{ route('service.index')}}">Servicios</a></li>
        
        <li class="active">Editar Servicios</li>
    </ol>
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" >

					<div class="col-sm-9  col-md-offset-1" >
<h2>Editar</h2>
<a href="{{route('service.index')}}" class="btn btn-default pull-right">LISTADO</a>

	<h2>EDITAR</h2>
	<p>
		
		{!! Form::model($servicedit,['route'=>['service.update', $servicedit->id], 'method' => 'PUT']) !!} <!-- este es el que se comunica con el controlador en esa ruta con una variable -->

		@include('Service.fragments.form')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

		{!! Form::close() !!}
	</p>

	

	
</div>

<div class="col-sm-1">
<h3>&nbsp</h3>
	
	
</div>
                  
                        
                    

                   
                </div>
            </div>
        </div>
    </div>
</div>




@stop