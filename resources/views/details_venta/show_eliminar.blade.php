


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
{!! Form::open(['route'=>['cart.destroy',$cart_show->id],'method'=>'DELETE']) !!}
                    
                   

                    <div class="form-group">
                        {!! form::label('Codigo Factura:') !!}
                        {!! $cart_show->id !!}
                    </div>

                    <div class="form-group">
                        {!! form::label('Cliente:') !!}
                        {!! $consult->first_name .' '. $consult->second_name.' '. $consult->surname.' '. $consult->second_surname !!}
                    </div>

                  <br>
                    {!! form::label('Articulos:') !!} {{!! $consult->conteo !!}}
                   @foreach($cart_show->details as $detalle )
                    
                    <div class="form-group">
                      {{$detalle->product->name}}
                    </div>

                   @endforeach

                    
                    
                   
                    
                    
                    
                       

                           
                        @if($cart_show->Total - $cart_show->Totaldev > 0 || auth()->user()->user_type_id > 1)
                              <h5><strong aling = "center">NO SE PUEDE ELMINAR FACTURA YA QUE AUN TIENE PRODUCTOS CARGADOS DEBE DEVOLVER TODOS LOS PRODUCTOS CARGADOS PARA ELIMINAR UNA FACTURA</strong></h5>

                            @else
                             {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}
                        @endif
                   

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ url('/cart')}}'"
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