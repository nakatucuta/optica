


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
{!! Form::open(['route'=>['devolution.destroy',$devolutionshow->id],'method'=>'DELETE']) !!}
                    
                   

                    <div class="form-group">
                        {!! form::label('ID:') !!}
                        {!! $devolutionshow->id !!}
                    </div>

                   

                    <div class="form-group">
                      
                      {!! form::label('Articulo:') !!}
                      {!! $devolutionshow->product->name !!}
                    </div>
                     
                     <div class="form-group">
                      {!! form::label('Cantidad:') !!}
                      {!! $devolutionshow->product->quantity !!}
                     </div>   

                    <div class="form-group">
                      {!! form::label('Codigo De Factura:') !!}
                      {!! $devolutionshow->cart->id !!}
                     </div>  
                    
                    
                   
                    
                    
                    
                       

                           

                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('devolution.index')}}'"
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