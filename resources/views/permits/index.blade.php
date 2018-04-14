@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')


<style>
	
	
</style>






<!-- <div class="container">
    <div class="row"> -->
	
       









 <section class="content-header">
<h1 class="pull-left">Permisos</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('permission.create')}}">Nuevo Registro</a>

</h1>
</section>
			
                

						<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-hover table-striped table-responsive" id="customers">
		<thead>

                        <tr id="tit">
                        	
                        	
                        	<th >Usuario:</th>
                        	
                        	
                        	
                        	
                        	<th>Servicio</th>
                        	<th>Autorisacion</th>
                           
                       	    
                            
                        	

                        </tr>
                        	
							<tbody>
								@foreach($permisos as $permisost)
					<tr>
						
						<td>{{ $permisost->user->name}}</td>
						
						



						
						


                        
                     
                       
						<td>


							
						<a href="{{route('permission.edit', $permisost->id)}}" title="EDITAR"><span class="icon-pencil2" ></span></a>

						<!-- <a href="{{route('mostrar_ingreso', $permisost->id)}}" title="DETALLE"><span class="icon-zoom-in" ></span></a> -->
							
						<a href="{{route('permission.show', $permisost->id)}}" ><span class="icon-bin" title="ELIMINAR"></a>

							

						
				</td>
						

					 
							@endforeach
							 </tr>
							</tbody>
                        </table>

                        {!! $permisos->render()!!}
                    
            </div>
        </div>
    </div>
</div>
@stop