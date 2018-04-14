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

#image{
    width: 200px;
    height: 200px;

}


</style>



    


      <section class="content-header">
                  <div >
                     @if (session('noti_validacion'))
                        <div class="alert alert-warning">
            <a class="close" data-dismiss="alert">×</a>
                            {{ session('noti_validacion') }}
                        </div>
                    @endif
    <ol class="breadcrumb">
        <li><a href="{{ url('/product')}}">Regresar</a></li>
        
        <li class="active">Insertar Imagenes</li>
    </ol>

    </div>
    <div class="col-md-6 col-md-offset-4">
        <h4 > Imagen Destacada "{{ $product->name }}"</h2>

 <img class="img-raised img-circle" src="{{$product->featured_image_url}}" alt="No hay imagen" width="250" height="250" alt="" id="image">

 <div class="description text-center">
     <p>  
        <div class="text-center">
                        <div class="form-group">
    
                        <div class="form-group">
            
                            <!-- validacion para cuando no hay productos disponibles o cuando el producto ya esta en el carrito de compras || $product->cart_details-->
     @if($product->quantity <= 0 )

               <h1><strong>ESTE PRODUCTO TIENE: {{$product->quantity}} UNDS DISPONIBLES</strong></h1>
                @else

                {!!Form::button('Agregar al carrito',['class'=>'btn btn-primary', 'data-toggle'=>'modal','data-target'=>'#myModal'])!!}
                  @endif

                   
</div>

 



                            </div>
                        </div>

                        


<a ><!-- aqui comienza la modal -->

                            <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
  
 
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Cantidad a agregar</h4>
        </div>
            <form method="post" action="{{ url('/cart') }}">
                {{ csrf_field() }}
                <input type="hidden"  name="product_id"  value="{{ $product->id }}" > 

                     <div class="modal-body">
        
                                <div class="form-group">
                                {!!Form::label('quantity','Cantidad')!!}

                                {!!Form::number('quantity',1,['class'=>'form-control','name'=>'quantity'])!!}
                                </div>
         
                        </div>


                         <div class="modal-footer">
                              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-default" >Añadir al carrito</button>


                         </div>
            </form>

      
       
      </div>
      
    </div>
  </div>


  </a><!-- aqui termina la modal -->


        </p>



     <p>{{ $product->long_description }}</p>
 </div>

        <div class="row">

  
  </div>
    </div>






           



<h1 class="pull-right">
    

</h1>
</section>
            
                

                            <div class="row">
                                <div class="col-md-6 col-md-offset-3">
                                    <div class="profile-tabs">
                                        <div class="nav-aling-center">
                                            <div class="tab-content gallery">
                                                <div class="tab-pane active" id="studio">
                                                    <div class="row">
                                                        <br>
                                                            <div class="box box-primary">
                                                                <div class="box-body">
                                                        <div class="col-md-6">

                    
                       

                            @foreach ($imagesLeft as $image)

                            <div class="panel panel-default">
                            <div class="panel-body">
                                <img src="{{ $image->url }}" alt="" class="img-rounded" id="image" class="img">
                            </div>
                        </div>
                      
                            @endforeach  

                             </div>

                            <div class="col-md-6">
                                
                                 @foreach ($imagesRight as $image)

                                    <div class="col-md-6">

                                         <div class="panel panel-default">
                                         <div class="panel-body">
                                <img src="{{ $image->url }}" alt="" class="img-rounded" id="image">
                                            </div>
                                                </div>
                                    
                            @endforeach 
                        </div>
                        </div>
                            </div>
                            </div> 
                             </div>
                            </div>         

                </div>
            </div>
        </div>
    </div>
</div>


@stop