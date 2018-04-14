

     @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')



<!-- <style>
  #person{

  width: 570%;
  
padding: 500px;

}

#person1{

	width: 550%;
	
padding: 500px;

}  
   
</style> -->

    <div class="container">
<div class="col-sm-8">


<div class="row">
        <div class="col-md-10 col-md-offset-4">
            @include('layouts.search.jssearch')

@include('Affiliation.searchencreate')

          <div class="panel panel-info">
                <div class="panel-heading">
                    Crear 
                </div>

                <div class="panel-body">


					{!! Form::open(['route'=>'affiliation.store']) !!} <!-- este es el que se comunica con el controlador en esa ruta con una variable -->
         
    @include('Affiliation.fragments.form')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

    {!! Form::close() !!}

                	<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>



            </div>
        </div>
    </div>



@include('Affiliation.indexencreate')



 
@stop