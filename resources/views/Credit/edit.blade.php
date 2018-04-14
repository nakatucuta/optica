
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

#person2{

  width: 570%;
  
padding: 500px;

}

#person3{

  width: 570%;
  
padding: 500px;

}

   
</style>


 @if (session('noti_validacion'))
                        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert">×</a>
                            {{ session('noti_validacion') }}
                        </div>
                    @endif

    <div class="container">
<div class="col-sm-8">


<div class="row">
        <div class="col-md-10 col-md-offset-4">
            <ol class="breadcrumb">
        <li><a href="{{ route('credit.index')}}">Regresar</a></li>
        
        <li class="active">Editar Abono</li>
    </ol>

            <div class="panel panel-info">
                <div class="panel-heading">
                    Crear 
                </div>

                <div class="panel-body">


					{!! Form::model($credit_edit,['route'=>['credit.update', $credit_edit->id], 'method' => 'PUT']) !!}
          
    @include('Credit.fragments.form')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

    {!! Form::close() !!}

                	<div class="col-sm-4">
<h3>&nbsp</h3>
    
    
</div>

</div>
            </div>
        </div>
    </div>
@stop