



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
                    Detalle de producto
                </div>

                <div class="panel-body">

{!! Form::open(['route'=>['affiliation.destroy',$affiliationshow->id],'method'=>'DELETE']) !!}
                    
                    <div class="form-group">
                        <label form="exampleInputPassword1">Info:</label>
                        
                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $affiliationshow->id !!}
                    </div>
                        

                    <div class="form-group">
                        {!! form::label('Nombre:') !!}
                       {{ $categorias->nombre.' '. $categorias->segundo.' '. $categorias->apellido1.' '. $categorias->apellido2}}
                    </div>
                    
                    
                    <div class="form-group">
                        {!! form::label('Entidad:') !!}
                       {{ $categorias->eps}}
                    </div>

                    
                    
                    
                        <div class ='panel panel-info'>

                            <h5>Desea eliminar este registro</h5>

                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('affiliation.index')}}'"
                    >Volver</button>

                        </div>
                        
                   
                    {!! Form::close() !!}

<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>
@stop