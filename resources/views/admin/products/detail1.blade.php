



 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')
    <div class="container">
<div class="col-sm-8">


<div class="row">
        <div class="col-md-10 col-md-offset-4">
             <ol class="breadcrumb">
        <li><a href="{{ url('/admin/products')}}">Regresar</a></li>
        
        <li class="active">Detalle Producto</li>
    </ol>
            <div class="panel panel-info"  >
                <div class="panel-heading">
                    DETALLE
                </div>

                <div class="panel-body">
 <h2 >PRECIO: ${{$productshow1->price}}</h2>


                    <div class="form-group">
                       
                        
                    </div>

                    <div class="form-group">
                        <label >ID:</label>
                        {!! $productshow1->id !!}
                    </div>
                        

                    
                    
                    
                    <div class="form-group">
                      <label >Nombre:</label><br>
                       {{ $productshow1->name}}
                    </div>

                    <div class="form-group">
                        <label >Cantidad Existente:</label><br>
                        {{$productshow1->quantity}}
                    </div>

                    <div class="form-group">
                        <label >Descripcion:</label><br>
                        {{$productshow1->description}}
                    </div>

                    <div class="form-group">
                        <label >Descripcion Larga:</label><br>
                        {{$productshow1->long_description}}
                    </div>

                    <div class="form-group">
                        <label >Tipo De Producto:</label><br>
                        {{$productshow1->category->name}}
                    </div>

                    <div class="form-group">
                        <label >Proveedor:</label><br>
                        {{$productshow1->legal_entity->business_name}}
                    </div>
                     
                    
                    
                    
    

</div>
            </div>
        </div>
    </div>
@stop