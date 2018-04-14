


@extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')

<style>
  #person{

  width: 570%;
  
padding: 500px;

}

#person1{

	width: 570%;
	
padding: 500px;

}  
   
</style>

    <div class="container">
<div class="col-sm-8">


<div class="row">
        <div class="col-md-10 col-md-offset-4">
@include('partials.messages')
        <ol class="breadcrumb">
        <li><a href="{{ url('/admin/products')}}">Regresar</a></li>
        
        <li class="active">Editar Producto</li>
    </ol>

            <div class="panel panel-info">
                <div class="panel-heading">
                    Editar 
                </div>

                    
                <div class="panel-body">

                
                <form action="{{ url('/admin/products/'.$product->id.'/edit')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            {!!Form::label('Name','Nombre')!!}

                            {!!Form::text('name',old('name').$product->name,['class'=>'form-control','name'=>'name'])!!}
                        </div>


                          <div class="form-group">
                            {!!Form::label('description','Descrpcion')!!}

                            {!!Form::text('description',old('description').$product->description,['class'=>'form-control','name'=>'description'])!!}
                        </div>

                            
                             <div class="form-group">
                            {!!Form::label('long_description','Descrpcion Larga')!!}

                            {!!Form::textArea('long_description',old('long_description').$product->long_description,['class'=>'form-control','name'=>'long_description'])!!}
                            </div>

                        
                         <div class="form-group">
                            {!!Form::label('price','Precio')!!}

                            {!!Form::number('price',old('price').$product->price,['class'=>'form-control','name'=>'price','step'=>'0.001'])!!}
                            </div>
                                

                                   <div class="form-group">
                            {!!Form::label('quantity','Cantidad')!!}

                            {!!Form::number('quantity',$product->quantity,['class'=>'form-control','name'=>'quantity'])!!}
                            </div>
                                
    

                            <div class="row">
                                <div class="col-md-7 col-md-offset-0">
                                <div class="form-group">
                                {!!Form::label('category_id','Categoria')!!}
                                {!!Form::select('category_id',$person,$product->category_id,['id'=>'person','name'=>'category_id','class'=>'form-control selectpicker'])  !!}
                                </div>
                                </div>
                            </div>


                             <div class="row">
                                <div class="col-md-7 col-md-offset-0">
                                <div class="form-group">
                                {!!Form::label('legal_entity_id','Proveedor')!!}
                                {!!Form::select('legal_entity_id',$person1,$product->legal_entity_id,['id'=>'person1','name'=>'legal_entity_id','class'=>'form-control selectpicker'])  !!}
                                </div>
                                </div>
                            </div>



                            <div class="form-group">
    
                         {!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
                            </div>



                    

                </form>
				
                	<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>



     <script>
$("#person").select2({

})

$("#person1").select2({

})


</script>
@stop