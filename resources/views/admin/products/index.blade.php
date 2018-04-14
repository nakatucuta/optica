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
 @include('admin.products.fragments.info')


<div class="container">
 
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="icon-bell" title="REPORTE"><span class="badge" style="background-color: red">{{$consult}}</span></button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Notificasiones</h4>
        </div>
        <div class="modal-body">
          <p>  @foreach($producto as $product)
          	
							<div class="alert alert-warning">
            <a class="close" data-dismiss="alert">×</a>
				
						<strong>El producto {{$product->name}} se ha  agotado..!</strong> <br>
						</div>
						
				
				
         @endforeach

     </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



		
                    @if (session('notification'))
                        <div class="alert alert-success">
                            {{ session('notification') }}
                        </div>
                    @endif
      <section class="content-header">
<h1 class="pull-left">Productos</h1>
<h1 class="pull-right">
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ url('/admin/products/create')}}">Nuevo Producto</a>

</h1>
</section>
			
                

					<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-responsive" id="account-table">
		<thead>

                        <tr id="tit">
                        	
                        	<th width="20px"  class="text-center">#</th>
                        	<th class="col-md-2 text-center" >Nombre</th>
                        	<th class="col-md-4 text-center">Descripcion</th>
                        	
                        	<th>Categoria</th>
                        	<th class="col-md-2">Precio</th>
                        	<th class="col-md-4">Cant</th>

                        </tr>
                        	
							<tbody>
								@foreach($products as $product)
					<tr>
						
						
						
						<td>{{ $product->id}}</td>
						<td>{{ $product->name}}</td>
						<td>{{ $product->description}}</td>
						<td>{{ $product->category ?  $product->category->name : 'General'}}</td>
					
						<td>{{ number_format($product->price, 0) }}</td>
						<td>{{$product->quantity}} </td>
						<td>{{$product->descuento }}</td>
						
						



						<td>
					
					
					
					
					

					

							
									
									<form method="post" action="{{ url('/admin/products/'.$product->id) }}">
									

									{{ csrf_field() }}
									{{ method_field('DELETE') }}

									<a href="{{ url('/admin/products/'.$product->id.'/edit') }}" title="EDITAR"><span class="icon-pencil2" ></span></a>

								
							
									<!-- <a href="{{ url('/admin/products/'. $product->id) }}" title="DETALLE"><span class="icon-zoom-in" ></span></a> -->
								
							



							 <!-- <button type="submit" href="{{ url('/admin/products/'.$product->id.'/delete') }}" ><span class="icon-bin" title="ELIMINAR"></button> -->
									

									 <a href=""><span class="icon-file-word" title="REPORTE"></a>

									 	<a href="{{ url('/admin/products/'.$product->id.'/images') }}" title="Imagen"><span class="icon-image"></a>
							 	</form>

							 		

							<a href="{{route('detalle_producto', $product->id)}}" ><span class="icon-bin" title="ELIMINAR"></a>
							
							<a href="{{ route('ver', $product->id) }}" title="DETALLE"><span class="icon-zoom-in" ></span></a>

							
					
				</td>

					 
							@endforeach
							 </tr>
							</tbody>
                        </table>

                      {{ $products->links()}}
                    

                
            </div>
        </div>
    </div>
</div>


@stop