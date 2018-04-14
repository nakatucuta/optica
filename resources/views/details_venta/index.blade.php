@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')







		@include('partials.messages')



			
                

					<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-responsive" id="customers">
		<thead>

                        <tr id="tit">
                        	
                        	
                        	<th >N. Factura</th>
                        	<th>Cliente</th>
                        	<th>CANT de productos</th>
                        	
                        	

                        </tr>
                        	
							<tbody>
								@foreach($consult as $product)
					<tr>
						
						
						<td>{{$product->id}}</td>
						<td>{{$product->first_name .' '. $product->second_name.' '. $product->surname.' '. $product->second_surname }}</td>
						<td>{{ $product->conteo}}</td>


						
						



						<td>
					
					
					
					
					
						
					

							<form method="post" action="{{ url('/details_venta/'.$product->id) }}">
									

									{{ csrf_field() }}
									

								
								

							
							<a href="{{ url('/details_venta/'.$product->id.'/show') }}" title="DETALLE">Detalle</a>



						
									

									 

									 	
							 	</form>

							 		 <a href="{{route('pdffactura',$product->id)}}">Imprimir</a><br>


									<a href="{{route('cart.show', $product->id)}}" >Eliminar</a>
									

							
							
							

							
					
				</td>

					 
							@endforeach
							 </tr>
							</tbody>
                        </table>

                      {{ $details->links()}}
                    

                
            </div>
        </div>
    </div>
</div>


@stop