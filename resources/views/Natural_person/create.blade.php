
@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')



    <div class="container">
<div class="col-sm-8">


<div class="row">
        <div class="col-md-10 col-md-offset-4">
@include('Natural_person.fragments.error')
            <div class="panel panel-info">
                <div class="panel-heading">
                    Crear 
                </div>

                <div class="panel-body">


					{!! Form::open(['route'=>'natural_person.store','enctype'=> 'multipart/form-data','files'=> true]) !!} <!-- este es el que se comunica con el controlador en esa ruta con una variable -->
         
    @include('Natural_person.fragments.form')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

    {!! Form::close() !!}

                	<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>
@stop