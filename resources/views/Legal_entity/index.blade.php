

 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')


@include('legal_entity.fragments.info')
		
@include('Legal_entity.search')<!-- aqui llamo a la vista del serach -->


           
                 <section class="content-header">
<h1 class="pull-left">Entidades</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('legalentity.create')}}">Nueva Empresa</a>

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
                        	<th>Tipo de entidad</th>
                        	<th>Nombre</th>
                        	<th>Nit</th>
                        	<th>Direccion</th>
                        	
                        	
                            <th>Email</th>
                            <th>Telefono</th>
                             

                         
							

                        </tr>
                        	
							<tbody>
								@foreach($categorias as $entidad)
					<tr>
						<td>{{ $entidad->id}}</td>
						<td>{{ $entidad->name_type}}</td>
						<td>{{ $entidad->business_name}}</td>
						<td>{{ $entidad->nit}}</td>
						<td>{{ $entidad->adress}}</td>
						
						
                        <td>{{ $entidad->email}}</td>
                        <td>{{ $entidad->phone_number}}</td>
                        
                         
					<td>
							
							<a href="{{route('legalentity.edit', $entidad->id)}}" title="EDITAR"><span class="icon-pencil2" ></span></a>

							<a href="{{route('mostrar_entidad', $entidad->id)}}" title="DETALLE"><span class="icon-zoom-in" ></span></a>

							<a href="{{route('legalentity.show', $entidad->id)}}" ><span class="icon-bin" title="ELIMINAR"></a>
						
							
							<!-- <li><form action="{{route('legalentity.destroy', $entidad->id)}}" method="POST">
							{{csrf_field()}}
							
							<input type="hidden" name="_method" value="DELETE">
							<button class="btn btn-link"><span class="glyphicon glyphicon-trash"></button>

						</form></li> -->

					
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