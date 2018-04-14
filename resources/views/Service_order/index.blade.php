@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')










@include('Service_order.fragments.info')
	
@include('Service_order.search')

                 <section class="content-header">
<h1 class="pull-left">Autorisaciones</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('service_order.create')}}">Nueva Autorisacion</a>

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
                        	<th>Codigo</th>
                        	<th>Fecha</th>
                       	 <th>Descripcion</th>
                       	
                       	 <th>Nombre</th>
                           
                       	    
                            
                        	

                        </tr>
                        	
							<tbody>
								@foreach($categorias as $entidad)
					<tr>
						<td>{{ $entidad->id}}</td>
						<td>{{ $entidad->code}}</td>
						<td>{{ $entidad->date_order}}</td>
						<td>{{ $entidad->description}}</td>
						
						<td>{{ $entidad->nombre.' '. $entidad->segundo.' '. $entidad->apellido1.' '. $entidad->apellido2}}</td>
						



						
						


                        
                     
                       
						<td>
							
						<a href="{{route('service_order.edit', $entidad->id)}}" title="EDITAR"><span class="icon-pencil2" ></span></a>

						<a href="{{route('mostrar_ordenservicio', $entidad->id)}}" title="DETALLE"><span class="icon-zoom-in" ></span></a>
							
						<a href="{{route('service_order.show', $entidad->id)}}" ><span class="icon-bin" title="ELIMINAR"></a>

							

				</td>
						

					 
							@endforeach
							 </tr>
							</tbody>
                        </table>

                        {!! $categorias->render()!!}
                    


            </div>
        </div>
    </div>
</div>
@stop