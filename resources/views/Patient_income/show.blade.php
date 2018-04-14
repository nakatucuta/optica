



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
        <li><a href="{{ route('patient_income.index')}}">Ingresos</a></li>
        
        <li class="active">Eliminar Ingresos</li>
    </ol>
            <div class="panel panel-info">
                <div class="panel-heading">
                    ELIMINAR 
                </div>

                <div class="panel-body">
 <h2>Desea eliminar este registro?</h2>
{!! Form::open(['route'=>['patient_income.destroy',$incomeshow->id],'method'=>'DELETE']) !!}
                    
                    <div class="form-group">
                        <label form="exampleInputPassword1">Info:</label>
                        
                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $incomeshow->id !!}
                    </div>
                        

                    
                    
                    
                    <div class="form-group">
                        {!! form::label('Descripcion:') !!}
                       {{ $categorias->description_income}}
                    </div>


                      <div class="form-group">
                        {!! form::label('Acompanante:') !!}
                       {{ $categorias->companion}}
                    </div>


                      <div class="form-group">
                        {!! form::label('Numero de Acompanante:') !!}
                       {{ $categorias->companion_phone_number}}
                    </div>

                     <div class="form-group">
                        {!! form::label('Parentesco:') !!}
                       {{ $categorias->kinship}}
                    </div>

                     <div class="form-group">
                        {!! form::label('Responsable:') !!}
                       {{ $categorias->responsible}}
                    </div>

                    <div class="form-group">
                        {!! form::label('Telefono Responsable:') !!}
                       {{ $categorias->phone_responsible}}
                    </div>

                    <div class="form-group">
                        {!! form::label('Relacion Responsable:') !!}
                       {{ $categorias->relationship_resposible}}
                    </div>

                    <div class="form-group">
                        {!! form::label('Fecha Cita:') !!}
                       {{ $categorias->fechacita}}
                    </div>


                    <div class="form-group">
                        {!! form::label('Nombre Servicio:') !!}
                       {{ $categorias->nombreservicio}}
                    </div>
                    
                    <div class="form-group">
                        {!! form::label('Orden De servicio:') !!}
                       {{ $categorias->codeservicio}}
                    </div>
                    
                   
                   
                    
                    
                    
                       

                           

                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('patient_income.index')}}'"
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