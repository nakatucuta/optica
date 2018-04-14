



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
        <li><a href="{{ route('devolution.index')}}">Devoluciones</a></li>
        
        <li class="active">Detalle Devolucion</li>
    </ol>
            <div class="panel panel-info">
                <div class="panel-heading">
                    DETALLE
                </div>

                <div class="panel-body">
 <h2>Detalle De Registro</h2>

                    
                  

                   <div class="form-group">
                        <label >FECHA:</label><br>
                        {!! $devolution_detail->created_at !!}

                    </div>

                     <div class="form-group">
                        <label >Usuario:</label>
                        {!! $devolution_detail->user->name !!}

                    </div>

                    <div class="form-group">
                        <label >Codigo de Factura:</label>
                        {!! $devolution_detail->cart_id !!}

                    </div>

                    <div class="form-group">
                        <label >Articulo:</label>
                        {!! $devolution_detail->product->name !!}

                    </div>


                     <div class="form-group">
                        <label >Cliente:</label>

                       {{$consulta->first_name .' '. $consulta->second_name.' '. $consulta->surname.' '. $consulta->second_surname }}

                    </div>



            
                        

                    
                    
                    
                    


                     
                    
                    
                       

                           

                   

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('devolution.index')}}'"
                    >Volver</button>

                        
                        
                   
                    

<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>
@stop