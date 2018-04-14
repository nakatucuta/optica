@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')

<style>
	#person{

	width: 550%;
	
padding: 500px;

}

#person1{

	width: 550%;
	
padding: 500px;

}    
</style>



		@include('Affiliation.fragments.info')
@include('Affiliation.search')<!-- aqui llamo a la vista del serach -->

            <section class="content-header">
<h1 class="pull-left">Afiliaciones</h1>
<h1 class="pull-right">

	
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('affiliation.create')}}">Nueva Afiliacion</a>
	
</h1>
</section>
			
                

						<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-hover table-striped table-responsive" id="customers">
		<thead>

                        <tr id="tit">
                        	<!-- <th width="20px">ID</th> -->
                        	<th >Nombre</th>
                        	<th >entidad</th>
                        	<th >fecha</th>
                        	
                        	

                        </tr>
                        	
							<tbody>
								@foreach($categorias as $entidad)
					<tr>
						<!-- <td>{{ $entidad->id}}</td> -->
						<td>{{ $entidad->nombre.' '. $entidad->segundo.' '. $entidad->apellido1.' '. $entidad->apellido2}}</td><!-- ojo para concatenar -->
						<td>{{ $entidad->eps}}</td>
						<td>{{ $entidad->nn}}</td><!-- ojo asi muestras la fecha y hora que ingresan -->

						<td>
							
							<a href="{{route('affiliation.edit', $entidad->id)}}"><span class="icon-pencil2" ></span></a>
							
							<a href="{{route('mostrar_afiliado', $entidad->id)}}"><span class="icon-zoom-in" ></span></a>

							
							
							
							
							<a href="{{route('affiliation.show', $entidad->id)}}"><span class="icon-bin" title="ELIMINAR"></a>
								
								<a href="{{route('pdfaffiliation',$entidad->id)}}"><span class="icon-file-word" title="REPORTE"></span></a>

							
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