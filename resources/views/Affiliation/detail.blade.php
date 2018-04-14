



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


                    
                    <div class="form-group">
                        <label form="exampleInputPassword1">Info:</label>
                        
                    </div>

                    <div class="form-group">
                       {!!Form::label('ID:')!!}
                       {{$affiliationshow->id }}
                    </div>
                        

                    <div class="form-group">
                       {!!Form::label('Nombre:')!!}
                       {{ $categorias->nombre.' '. $categorias->segundo.' '. $categorias->apellido1.' '. $categorias->apellido2}}
                    </div>
                    
                    
                    <div class="form-group">
                        {!! form::label('Entidad:') !!}
                       {{ $categorias->eps}}
                    </div>

                    
                    
                    
                        

                  

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('affiliation.index')}}'"
                    >Volver</button>

                      
                        
                   
            

<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>
@stop