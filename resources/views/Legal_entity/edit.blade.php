


@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')
@include('legal_entity.fragments.error')


<style>
	 #person{

  width: 445%;
  
padding: 500px;

}
</style>
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" >

					<div class="col-sm-9  col-md-offset-1" >
<h2>Editar</h2>
<a href="{{route('legalentity.index')}}" class="btn btn-default pull-right">LISTADO</a>

	<h2>EDITAR</h2>
	<p>
		
		{!! Form::model($entytiedit,['route'=>['legalentity.update', $entytiedit->id], 'method' => 'PUT']) !!} <!-- este es el que se comunica con el controlador en esa ruta con una variable -->

		@include('Legal_entity.fragments.form')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

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