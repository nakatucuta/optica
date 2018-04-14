@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')





		@include('Appointment_calendar.fragments.info')


      <section class="content-header">
<h1 class="pull-left">Historias</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{!!route('diagnostic.create') !!}">Nueva Historia</a>

</h1>
</section>
			
                

					<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-responsive" id="customers">
		<thead>

                        <tr id="tit">
                        	
                        	
                        	<th>Nombre</th>
                        	<th>fecha</th>
                        	
                        	<th>
							
                         
							</th>

                        </tr>
                        	
							<tbody>
								@foreach($categorias as $entidad)
					<tr>
						
						
						<td>{{ $entidad->identification.' '. $entidad->first_name.' '. $entidad->second_name.' '. $entidad->surname.' '. $entidad->second_surname}}</td>

						<td>{{ $entidad->ojo}}</td>
						
						

						<td>
					
					
					
					
					

						<!-- 	<li><a href="{{route('diagnostic.edit', $entidad->id)}}">Editar</a></li> -->

							<a href="{{route('diagnostic.show', $entidad->id)}}" title="DETALLE"><span class="icon-zoom-in" ></span></a>

							


							
							<!-- <li><a href="{{route('diagnostic.show', $entidad->id)}}">Eliminar</a></li> -->

							
						<a href="{{route('diagnostic.edit', $entidad->id)}}" title="EDITAR"><span class="icon-pencil2" ></span></a>

						 <a href="{{route('diagnostic.show', $entidad->id)}}" ><span class="icon-bin" title="ELIMINAR"></span></a>

						 <a href="{{route('pdfdiagnostic',$entidad->id)}}"><span class="icon-file-word" title="Historia Clinica"></span></a>

						 <a href="{{route('pdfformula',$entidad->id)}}"><span class="icon-file-openoffice" title="FORMULA"></span></a>
							
							

							
					
				</td>
						<!--<td><a href="" class="btn btn-link"><span class="glyphicon glyphicon-edit"></span></a></td>
						<td><form action="" method="POST">
							{{csrf_field()}}
							
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link"><span class="glyphicon glyphicon-trash"></button>

						</form></td>  -->

					 
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