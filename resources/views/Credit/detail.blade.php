



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
        <li><a href="{{ route('credit.index')}}">Abonos</a></li>
        
        <li class="active">Detalle Abono</li>
    </ol>
            <div class="panel panel-info">
                <div class="panel-heading">
                    DETALLE
                </div>

                <div class="panel-body">
 <h2>Detalle De Registro</h2>

                    
                  

                   <div class="form-group">
                        <label >FECHA:</label><br>
                        {!! $credit_detail->created_at !!}

                    </div>

                     <div class="form-group">
                        <label >Usuario:</label>
                        {!! $credit_detail->user->name !!}

                    </div>

                    <div class="form-group">
                        <label >Codigo de Factura:</label>
                        {!! $credit_detail->cart_id !!}

                    </div>

                    <div class="form-group">
                        <label >Valor Abonado:</label><br>
                        ${!! number_format($credit_detail->value, 0) !!}

                    </div>


                     



            
                        

                    
                    
                    
                    


                     
                    
                    
                       

                           

                   

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('credit.index')}}'"
                    >Volver</button>

                        
                        
                   
                    

<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>
@stop