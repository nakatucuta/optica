 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')









<!-- <div class="container">
    <div class="row"> -->
	
        <div class="col-md-14 col-md-offset-0">
	@include('Patient_income.fragments.info')
	@include('Patient_income.search')


             <div class="panel panel-default" id="nene">
			
                <div class="panel-heading" id="nene" ><strong>Listado</strong></div>

					 <table class="table table-hover table-striped table-responsive" >

                        <tr id="tit">
                        	<th width="20px">ID</th>
                        	<th>Descripcion</th>
                        	<th>Acompanante</th>
                        	<th>Prentesco</th>
                        	<th>Responsable</th>
                        	<th>Tel Responsable</th>
                        	<th>Cita</th>
                        	<th>Servicio</th>
                        	<th>Orden de servicio</th>
                           
                       	    
                            
                        	<th>
							<button type="button" class="btn btn-primary pull-right "  id="color-boton" name="cancelar" 
                            onClick="location.href='{{ route('patient_income.create')}}'"
                    >Nuevo</button>
                  
                            	<!-- aqui llamo a la modal ojo -->
							</th>

                        </tr>
                        	
							<tbody>
								@foreach($categorias as $entidad)
					<tr>
						<td>{{ $entidad->id}}</td>
						<td>{{ $entidad->description_income}}</td>
						<td>{{ $entidad->companion}}</td>
						<td>{{ $entidad->kinship}}</td>
						<td>{{ $entidad->responsible}}</td>
						<td>{{ $entidad->phone_responsible}}</td>
						<td>{{ $entidad->fechacita}}</td>
						<td>{{ $entidad->nombreservicio}}</td>
						<td>{{ $entidad->codeservicio}}</td>
						
						



						
						


                        
                     
                       
						<td><ul class="nav navbar-nav">
					
					
					<li class="dropdown">
						<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" >Opciones <span class="caret"></span>
						
						</a>
						<!--aqui terminan los item-->

						<!--asi comienzo un menu desplegable-->
						<ul class="dropdown-menu" >
							
							
						<li><a href="{{route('patient_income.edit', $entidad->id)}}">Editar</a></li>

						<li><a href="{{route('mostrar_ingreso', $entidad->id)}}">Detalle</a></li>
							
						<li><a href="{{route('patient_income.show', $entidad->id)}}">Eliminar</a></li>

							

						</ul>
					</li>


				</ul>
				</td>
						

					 
							@endforeach
							 </tr>
							</tbody>
                        </table>

                        {!! $categorias->render()!!}
                    

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
   <!--  </div>
</div> -->
@stop