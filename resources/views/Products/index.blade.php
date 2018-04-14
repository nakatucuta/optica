 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')

   <style>
        .team .row .col-md-4 {
            margin-bottom: 5em;
        }
        .team .row {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display:         flex;
          flex-wrap: wrap;
        }
        .team .row > [class*='col-'] {
          display: flex;
          flex-direction: column;
        }

        .tt-query {
          -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
             -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
                  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .tt-hint {
          color: #999
        }

        .tt-menu {    /* used to be tt-dropdown-menu in older versions */
          width: 222px;
          margin-top: 4px;
          padding: 4px 0;
          background-color: #fff;
          border: 1px solid #ccc;
          border: 1px solid rgba(0, 0, 0, 0.2);
          -webkit-border-radius: 4px;
             -moz-border-radius: 4px;
                  border-radius: 4px;
          -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
             -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                  box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .tt-suggestion {
          padding: 3px 20px;
          line-height: 24px;
        }

        .tt-suggestion.tt-cursor,.tt-suggestion:hover {
          color: #fff;
          background-color: #0097cf;

        }

        .tt-suggestion p {
          margin: 0;
        }
    </style>



<div class="container">
  <h2>notificasiones</h2>
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

<!-- OJO FORMULARIO DE BUSQUEDA -->
 <div class="section text-center">
 <form class="form-inline" method="get" action="{{ url('/search') }}">
                <input type="text" placeholder="¿Qué producto buscas?" class="form-control" name="query" id="search">
                <button class="btn btn-primary btn-just-icon" type="submit">
                    <i class="material-icons">search</i>
                </button>
            </form>
            </div>
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



    <!-- OJO TRATA DE COMPRENDER ESTE SCRIPT LUEGO TE VAS A PAGE HAY LLMAS EL PLUYIN Y OBERSVA SERACH CONTROLER PSS HAY LLAMAS EL FORMATO JSON DESDE UNA CONSULTA POR MODELO -->
    <script>  
        $(function () {
            // 
            var products = new Bloodhound({
              datumTokenizer: Bloodhound.tokenizers.whitespace,
              queryTokenizer: Bloodhound.tokenizers.whitespace,
              prefetch: '{{ url("/products/json") }}'
            });            

            // inicializar typeahead sobre nuestro input de búsqueda
            $('#search').typeahead({
                hint: true,
                highlight: true,
                minLength: 1
            }, {
                name: 'products',
                source: products
            });
        });
    </script>

@stop