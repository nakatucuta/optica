@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')

<style>
	#person{

	width: 550%;
	
padding: 500px;

}

#person1{

	width: 550%;
	
padding: 500px;

}    

body {font-family: Arial; color: black;}
</style>






<ol class="breadcrumb">
        <li><a href="{{ url('/cart')}}">Regresar</a></li>
        
        <li class="active">Detalle  de Venta</li>
    </ol>

			<div class="content">

     


    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
        <table class="table table-responsive" id="account-table">
        <thead>

                       <tr>
                            
                            <th>Articulo:</th>
                           
                           
                            <th>Cantidad</th>
                            <th>Subtotal</th>


                        </tr>
                        	
							<tbody>
							
								
					

						@foreach($cart->details as $detaile)
						<tr>
						 <td>
                            <img src="{{  $detaile->product->featured_image_url }}" alt="" width="100" height="100">
                            
						<strong>{{ $detaile->product->name}}</strong></td>
							
						 <td>x{{$detaile->quantity}}</td>
                       <td>($ {{ $detaile->quantity * $detaile->product->price }})</td>
                     

                     
		
		@endforeach
	
	 
	
					 
							
							 </tr>
							</tbody>
                        </table>

                    <strong>TOTAL:</strong> {{ $cart->total }}</td>

                
            </div>
        </div>
    </div>
</div>


@stop