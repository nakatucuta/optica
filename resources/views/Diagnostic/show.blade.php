


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
 <h2>Desea eliminar este registro?</h2>
{!! Form::open(['route'=>['diagnostic.destroy',$diagnosticshow->id],'method'=>'DELETE']) !!}
                    
                    <div class="form-group">
                        <label form="exampleInputPassword1">Info:</label>
                        
                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $diagnosticshow->id !!}
                    </div>
                        

                    
                    
                    
                    <div class="form-group">
                        {!! form::label('cc:') !!}
                       {{ $categorias->identification}}
                    </div>


                      <div class="form-group">
                        {!! form::label('nombre:') !!}
                       

                       {{ $categorias->first_name.' '. $categorias->second_name.' '. $categorias->surname.' '. $categorias->second_surname}}
                    </div>


                    
                    
                    
                    
                       

                           

                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('diagnostic.index')}}'"
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