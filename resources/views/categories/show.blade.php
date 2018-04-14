


 @extends('adminlte::page')

@section('title', 'Optica Iris')

@section('content_header')
    
@stop

@section('content')
    <div class="container">
<div class="col-sm-8">


<div class="row">
        <div class="col-md-10 col-md-offset-4">

            <div class="panel panel-info">
                <div class="panel-heading">
                    Detalle
                </div>

                <div class="panel-body">
 <h2>Detalle De Registro</h2>
{!! Form::open(['route'=>['category.destroy',$categoryshow->id],'method'=>'DELETE']) !!}
                    
                    <div class="form-group">
                        <label form="exampleInputPassword1">Info:</label>
                        
                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $categoryshow->id !!}
                    </div>
                        

                    
                    
                    
                    <div class="form-group">
                        {!! form::label('Nombre:') !!}
                       {{ $categoryshow->name}}
                    </div>


                      <div class="form-group">
                        {!! form::label('Descritpcion:') !!}
                       {{ $categoryshow->description}}
                    </div>


                    
                    
                    
                    
                       

                           


                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('category.index')}}'"
                    >Volver</button>

                        
                        
                   
                    {!! Form::close() !!}

<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>
@stop