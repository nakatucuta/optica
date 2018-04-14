


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
            <div class="panel panel-info">
                <div class="panel-heading">
                    Crear 
                </div>

                <div class="panel-body">

                
                <form action="{{ url('/admin/products')}}" method="post">
                        {{ csrf_field() }}

                        <div class="form-group">
                            {!!Form::label('Name','Nombre')!!}

                            {!!Form::text('name',old('name'),['class'=>'form-control','name'=>'name'])!!}
                        </div>


                          <div class="form-group">
                            {!!Form::label('description','Descrpcion')!!}

                            {!!Form::text('description',old('description'),['class'=>'form-control','name'=>'description'])!!}
                        </div>

                            
                             <div class="form-group">
                            {!!Form::label('long_description','Descrpcion Larga')!!}

                            {!!Form::textArea('long_description',old('long_description'),['class'=>'form-control','name'=>'long_description'])!!}
                            </div>

                        
                         <div class="form-group">
                            {!!Form::label('price','Precio')!!}

                            {!!Form::number('price',old('price'),['class'=>'form-control','name'=>'price'])!!}
                            </div>
                                
                                <div class="form-group">
                            {!!Form::label('quantity','Cantidad')!!}

                            {!!Form::number('quantity',old('quantity'),['class'=>'form-control','name'=>'quantity'])!!}
                            </div>
                                
    

                            <div class="row">
                                <div class="col-md-7 col-md-offset-0">
                                <div class="form-group">
                                {!!Form::label('category_id','Categoria')!!}
                                {!!Form::select('category_id',$person,null,['id'=>'person','name'=>'category_id','class'=>'form-control selectpicker'])  !!}
                                </div>
                                </div>
                            </div>
                                    

                                   


                        <div class="row">
                                <div class="col-md-7 col-md-offset-0">
                                <div class="form-group">
                                {!!Form::label('legal_entity_id','Proveedor')!!}
                                {!!Form::select('legal_entity_id',$person1,null,['id'=>'person1','name'=>'legal_entity_id','class'=>'form-control selectpicker'])  !!}
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