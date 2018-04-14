 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')


<style>
	
	
</style>






<!-- <div class="container">
    <div class="row"> -->
	
       
	@include('Patient_income.fragments.info')
	@include('Patient_income.search')







 <section class="content-header">
<h1 class="pull-left">Ingresos</h1>
<h1 class="pull-right">
	
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('patient_income.create')}}">Nuevo Ingreso</a>
	
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
                        	
                        	<th >Datos de Ingreso:</th>
                        	
                        	
                        	
                        	
                        	<th>Servicio</th>
                        	<th>Autorisacion</th>
                           
                       	    
                            
                        	

                        </tr>
                        	
							<tbody>
								@foreach($categorias as $entidad)
					<tr>
						<td>{{ $entidad->id}}</td>
						<td>{{ $entidad->appointment_calendar->affiliation->natural_person->first_name.' '.$entidad->appointment_calendar->affiliation->natural_person->second_name.' '.$entidad->appointment_calendar->affiliation->natural_person->surname.' '.$entidad->appointment_calendar->affiliation->natural_person->second_surname.' '.$entidad->appointment_calendar->date}}</td>
						
						
						
						
						
						<td>{{ $entidad->service->name_service}}</td>
						<td>{{ $entidad->service_order->code}}</td>
						
						



						
						


                        
                     
                       
						<td>


							
						<a href="{{route('patient_income.edit', $entidad->id)}}" title="EDITAR"><span class="icon-pencil2" ></span></a>
							
						<a href="{{route('mostrar_ingreso', $entidad->id)}}" title="DETALLE"><span class="icon-zoom-in" ></span></a>
							
						<a href="{{route('patient_income.show', $entidad->id)}}" ><span class="icon-bin" title="ELIMINAR"></a>
							
							

						
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