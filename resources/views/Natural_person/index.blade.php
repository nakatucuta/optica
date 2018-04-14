@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')











	
        
    @include('Natural_person.fragments.info')

@include('Natural_person.search')
<section class="content-header">
<h1 class="pull-left">Listado</h1>
<h1 class="pull-right">
<!-- auth()->user()->permissions->find(1)->insert_n == 2 ojo en find buscas el id que estas trabajando y luego el cmapo el que debe variar es el del cmapo -->
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('natural_person.create')}}">Nueva Persona</a>
	
</h1>
</section>
			
                

						<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-hover table-striped table-responsive" id="customers">
		<thead>
                        <tr id="tit">
                        	<!-- <th width="20px">ID</th>
                        	<th>Tipo</th> -->
                        	<th>C.C</th>
                        	<th>nombre</th>
                        	
                        	
                            <th>Fech nacimiento</th>
                            <th>Telefono</th>
                            
                            <!-- <th>genero</th> -->
                            <!-- <th>email</th> -->
                            <th>direccion</th>
                       	    <!-- <th>Edad</th> -->
                       	    <th>image</th>
                            
                        	<th>
							
                            	
							</th>

                        </tr>
                        	
							<tbody>
								@foreach($categorias as $entidad)
					<tr>
						<!-- <td>{{ $entidad->id}}</td>
						<td>{{ $entidad->tip}}</td> -->
						<td>{{ $entidad->identifi}}</td>

						<td>{{ $entidad->nombre.' '.$entidad->segundo.' '.$entidad->apelli.' '.$entidad->ape2}}</td>

						
						<td>{{ $entidad->cumple}}</td>
						<td>{{ $entidad->tel}}</td>
						
						<!-- <td>{{ $entidad->gen}}</td> -->
						<!-- <td>{{ $entidad->correo}}</td> -->
						<td>{{ $entidad->dir}}</td>
						
						
						<td><img src="images/{{$entidad->image}}" alt="" style="width: 50px;height: 50px;"></td>
						<!-- <td>{{$entidad->descuento}}</td> -->



						
						


                        
                     
                       
						<td>
							
							
						
						<a href="{{route('natural_person.edit', $entidad->id)}}"><span class="icon-pencil2" title="EDITAR"></span></a>
						
						<a href="{{route('mostrar_persona', $entidad->id)}}"><span class="icon-zoom-in" id="icono"></span></a>
							
						<a href="{{route('natural_person.show', $entidad->id)}}"><span class="icon-bin" title="ELIMINAR"></a>
							
							<!-- <li><form action="{{route('natural_person.destroy', $entidad->id)}}" method="POST">
							{{csrf_field()}}
							
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link"><span class="glyphicon glyphicon-trash"></button>

						</form></li> -->

					
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

<!-- <img src="{{ asset('images/i.jpg') }}" alt="" width="50px" height="200px">
                        <p><strong>Precio:</strong>10.000$</p> -->
@stop