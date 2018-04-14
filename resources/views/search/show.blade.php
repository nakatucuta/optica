 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')

 






 <form class="form-inline" method="get" action="{{ url('/search') }}">
                <input type="text" placeholder="¿Qué producto buscas?" class="form-control" name="query" id="search">
                <button class="btn btn-primary btn-just-icon" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>
<!-- <style>
	
	.row{
		display: -webkit-box;
		display: -webkit-flex;
		display: -ms-flexbox;
		display: flex;
		flex:-wrap:wrap;
	}

	.row > [class*='col-']{
		display: flex;
		flex-direction: column;

	}



</style> -->



<div class="section text-center">

	<h2 class="title">Productos Disponibles</h2>
	<div class="team">
		<div class="row">
			@foreach($products as $product)

		
					<div class="col-md-4">
				
					<div class="panel panel-default">
					  <div class="panel-body">
					<img class="img-raised img-circle" src="{{$product->featured_image_url}}" alt="" style="width: 200px;height: 200px;"><!-- ojo recuerda que te sale porque le asegnaste pocos productos al seeder para que esos pocas productos tuviesen una imagen relacionada si quieres que este como antes ve al seeder de product y al facotory de imagen y al database de produc -->

<!-- @if ($product->images()->count() >= 1)
<img src="{‌{ $product->images()->first()->image }}" class="img-raised img-circle">
@else
<img src="  asset('/images/022629a859ce94e4b1ccbb05e60ef1f0.jpg')" class="img-raised img-circle" style="width: 50px;height: 50px;>

@endif -->
					
					<a href="{{ url('/admin/products/'. $product->id) }}"><br>{{$product->name}}</a> 
					
						<small class="text-muted">{{$product->category->name}}</small>
						<small class="text-muted">{{ $product->price }}</small>
						<br>
						<small class="text-muted" ><strong>CANT:</strong>{{ $product->quantity }}</small>
						<small class="text-muted"></small>
					</h4>

					<!-- 	<p class="description">
						{{ $product->description }}
							ojo mira el video 51 
					</p> -->
							<br>
					<a href="" class="btn btn-primary">agregar</a>

				</div>

			</div>
			</div>

			@endforeach
			
		</div>
		{{ $products->links()}}
	</div>
	

</div>



@stop