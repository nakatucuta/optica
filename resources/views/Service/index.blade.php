@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')










	@include('Service.fragments.info')

@include('Service.search')


                            <section class="content-header">
<h1 class="pull-left">Servicios</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('service.create')}}">Nuevo Servicio</a>

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
                        	<th>Nombre de servicio</th>
                        	<th>Valor</th>
                        	
                        	
                        	
                            <th>Tipo de servicio</th>
                           
                       	    
                            
                        	

                        </tr>
                        	
							<tbody>
								@foreach($categorias as $entidad)
					<tr>
						<td>{{ $entidad->id}}</td>
						<td>{{ $entidad->name_service}}</td>
						<td>{{ $entidad->value_service}}</td>

						

						
						<td>{{ $entidad->type_service}}</td>
						



						
						


                        
                     
                       
						<td>
							
						<a href="{{route('service.edit', $entidad->id)}}" title="EDITAR"><span class="icon-pencil2" ></span></a>

						<a href="{{route('mostrar_servicio', $entidad->id)}}" title="DETALLE"><span class="icon-zoom-in" ></span></a>
							
						<a href="{{route('service.show', $entidad->id)}}" ><span class="icon-bin" title="ELIMINAR"></a>

							

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