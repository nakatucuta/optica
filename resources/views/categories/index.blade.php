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

body {font-family: Arial; color: black;}
</style>



		@include('partials.messages')


      <section class="content-header">
<h1 class="pull-left">Productos</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{!!route('category.create') !!}">Nueva Categoria</a>

</h1>
</section>
			
                

					<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-responsive" id="customers">
		<thead>

                        <tr id="tit">
                        	
                        	<th width="20px"  class="text-center">#</th>
                        	<th class="col-md-2 text-center" >Nombre</th>
                        	<th class="col-md-4 text-center">Descripcion</th>
                        	<th>N productos asociados</th>
                        	
                   

                        </tr>
                        	
							<tbody>
								@foreach($categories as $product)
					<tr>
						
						
						
						<td>{{ $product->id}}</td>
						<td>{{ $product->name}}</td>
						<td>{{ $product->description}}</td>
						<td>{{ $product->products->count()}}</td>
						
						
						
						



						<td>
					
					
					
					
					

					
				
							<a href="{{route('category.show', $product->id)}}" title="DETALLE"><span class="icon-zoom-in" id="icono"></span></a>

							


						

							
						<a href="{{route('category.edit', $product->id)}}" title="EDITAR"><span class="icon-pencil2" title="EDITAR"></span></a>

						 <a href="{{route('category.show', $product->id)}}" ><span class="icon-bin" title="ELIMINAR"></span></a>

						 
							
							
									
								

							
							
							

							
					
				</td>

					 
							@endforeach
							 </tr>
							</tbody>
                        </table>

                     
                    
					{{ $categories->links()}}
                
            </div>
        </div>
    </div>
</div>


@stop