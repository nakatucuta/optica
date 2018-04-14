@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')

<style>
  #person{

  width: 570%;
  
padding: 500px;

}

 #person1{

  width: 570%;
  
padding: 500px;

}

#person2{

  width: 570%;
  
padding: 500px;

}

   
</style>


<ol class="breadcrumb">
        <li><a href="{{ route('permission.index')}}">Permisos</a></li>
        
        <li class="active">Insertar Permisos</li>
    </ol>

            <div class="panel panel-info">
                <div class="panel-heading">
                    Crear 
                </div>

                <div class="panel-body">
 
		
		{!! Form::model($permisos,['route'=>['permission.update', $permisos->id], 'method' => 'PUT']) !!} <!-- este es el que se comunica con el controlador en esa ruta con una variable -->

		@include('permits.fragments.form_edit')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

		{!! Form::close() !!}
	<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
      
    
@stop