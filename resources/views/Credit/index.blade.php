 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')



	
       
	



   @include('partials.messages')



 <section class="content-header">
<h1 class="pull-left">Abonos</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('credit.create')}}">Nuevo Abono</a>

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
                        	
                        	<th >Fecha:</th>
                        	
                        	
                        	
                        	
                        	<th>Valor</th>
                        	<th>N. Factura</th>
                        	<th>User</th>
                        	

                           
                       	    
                            
                        	

                        </tr>
                        	
							<tbody>
								@foreach($credits as $devolution)
					<tr>
						<td>{{ $devolution->id}}</td>
						<td>{{ $devolution->date}}</td>
						<td>{{ $devolution->value }}</td>
						
						<td>{{$devolution->cart->id}}</td>
						<td>{{$devolution->user->name}}</td>
						
						
						
						


                        
                     
                       
						<td>


							
						<a href="{{route('credit.edit', $devolution->id)}}" title="EDITAR"><span class="icon-pencil2" title="EDITAR"></span></a>

						<a href="{{route('mostrar_detalle', $devolution->id)}}" title="DETALLE"><span class="icon-zoom-in" id="icono"></span></a> <a href=""></a>
							
						<a href="{{route('credit.show', $devolution->id)}}" ><span class="icon-bin" title="ELIMINAR"></span></a>

							

						
				</td>
						

					 
							@endforeach
							 </tr>
							</tbody>
                        </table>

                        {!! $credits->render()!!}
                    
            </div>
        </div>
    </div>
</div>
@stop