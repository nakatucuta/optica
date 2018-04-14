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
                    ELIMINAR
                </div>

                <div class="panel-body">

                    

{!! Form::open(['route'=>['product.destroy',$productshow->id],'method'=>'DELETE']) !!}

                  

                            
                               <div class="form-group">
                        <label form="exampleInputPassword1">DESEA ELIMINAR ESTE REGISTRO?</label>

                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $productshow->id !!} 
                    </div>

                    <div class="form-group">
                        {!! form::label('NOMBRE:') !!}
                        {!! $productshow->name !!} 
                    </div>

                    <div class="form-group">
                        {!! form::label('CANTIDAD:') !!}
                        {!! $productshow->quantity !!} 
                    </div>

                     <div class="form-group">
                        {!! form::label('Descripcion:') !!}
                        {!! $productshow->description !!} 
                    </div>


                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}
						
                    <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ url('/admin/products')}}'"
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