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



	


      <section class="content-header">
		<h4 > Imagenes del Producto "{{ $product->name }}"</h2>
      	<div class="row">

      		<div >
	<ol class="breadcrumb">
        <li><a href="{{ url('/admin/products')}}">Regresar</a></li>
        
        <li class="active">Insertar Imagenes</li>
    </ol>

    </div>

    </div>






			<form method="post"  action="" enctype="multipart/form-data" > <!-- el action se deja vacio porque el va a asumir qu ela peticion se hace en una ruta excatamente igual a la que estamos ojo video  44 minuto 15 -->
				{{ csrf_field() }}
					
						<div class="input-field col s8">
								{!! Form::label('image', 'Foto de PRODUCTO:') !!}
								{!!Form::file('image',['class' => 'file-field input-field', 'name'=>'photo', 'required'=>''])!!}
 
 						</div>
				
								<button  type="submit" class="btn btn-primary pull-right"
								style="margin-top: -10px;
								margin-bottom: 5px">
								Subir Imagen
							 			</button>					
				

			</form>



<h1 class="pull-right">
	

</h1>
</section>
			
                

	<div class="content">
					<div class="clearfix"></div>
					<div class="box box-primary">
						<div class="box-body">
						
						<div class="row">
							@foreach ($images as $image)
							<div class="col-md-4">
				
					<div class="panel panel-default">
					  <div class="panel-body">
					   <img src="{{ $image->Url}}" alt="No hay imagen" width="250" height="250">
							
					  	
					  </div>

							<form method="post" action="">
								{{ csrf_field() }}
					   			{{ method_field('DELETE') }}
					   			<input type="hidden" name="image_id" value="{{ $image->id }}">
					   			<button  type="submit" class="btn btn-danger "  style="background-color: red;">Eliminar</button>

								@if($image->featured)

								<button   type="button" class="btn btn-info btn-circle btn-lg" ><span class="icon-heart" title="Favorito"  rel="tooltip" title="IMAGEN DESTACADA"></button>
								@else
					   			<a href="{{ url('/admin/products/'. $product->id .'/images/select/'.$image->id) }}"  type="submit" class="btn btn-warning btn-circle btn-lg" style="background-color: #e600ac;" ><span class="icon-heart" title="Favorito"></a>
					   			@endif
							</form>

					</div>

			</div>


	
                      
         @endforeach           

                </div>
            </div>
        </div>
    </div>
</div>


@stop