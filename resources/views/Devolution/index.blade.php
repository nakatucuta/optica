 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')



	
       
	



   @include('partials.messages')
   



 <section class="content-header">
<h1 class="pull-left">Devoluciones</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('devolution.create')}}">Nueva Devolucion</a>

</h1>
</section>
			
                

						<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-hover table-striped table-responsive" id="customers">
		<thead>

                        <tr id="tit">
                        	<th width="20px">ID</th>
                        	
                        	<th >Articulo:</th>
                        	
                        	
                        	
                        	
                        	<th>Cantidad</th>
                        	
                        	<th>N. Factura</th>
                        	<th>Fecha Devolucion</th>
                        	<th></th>
                        	<th>User</th>

                           
                       	    
                            
                        	

                        </tr>
                        	
							<tbody>
								@foreach($devolutions as $devolution)
					<tr>
						<td>{{ $devolution->id}}</td>
						<td>{{ $devolution->product->name}}</td>
						<td>{{ $devolution->quantity }}</td>
						 
						<td>{{$devolution->cart->id}}</td>
						<td>{{$devolution->return_date}}</td>
						<td>{{$devolution->esta}}</td>
						<td>{{$devolution->user->name}}</td>
						
						
						


                        
                     
                       
						<td>


							
						<!-- <a href="{{route('devolution.edit', $devolution->id)}}" title="EDITAR"><span class="icon-pencil2" title="EDITAR"></span></a> -->

						<a href="{{route('mostrar_devolucion', $devolution->id)}}" title="DETALLE"><span class="icon-zoom-in" id="icono"></span></a> <a href=""></a>
							
						<a href="{{route('devolution.show', $devolution->id)}}" ><span class="icon-bin" title="ELIMINAR"></span></a>

							

						
				</td>
						

					 
							@endforeach
							 </tr>
							</tbody>
                        </table>

                        {!! $devolutions->render()!!}
                    
            </div>
        </div>
    </div>
</div>
@stop