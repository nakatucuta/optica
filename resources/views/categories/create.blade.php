
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
        <li><a href="{{ route('category.index')}}">Atras</a></li>
        
        <li class="active">Insertar Citas</li>
    </ol>
@include('partials.messages')
            <div class="panel panel-info">
                <div class="panel-heading">
                    Crear 
                </div>

                <div class="panel-body">


					{!! Form::open(['route'=>'category.store']) !!} <!-- este es el que se comunica con el controlador en esa ruta con una variable -->
         
    @include('categories.fragments.form')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

    {!! Form::close() !!}

                	<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>
@stop