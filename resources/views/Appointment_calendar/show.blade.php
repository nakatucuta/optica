


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
                    ELIMINAR 
                </div>

                <div class="panel-body">
 <h2>Desea eliminar este registro?</h2>
{!! Form::open(['route'=>['appointment_calendar.destroy',$appointmentshow->id],'method'=>'DELETE']) !!}
                    
                    <div class="form-group">
                        <label form="exampleInputPassword1">Info:</label>
                        
                    </div>

                    <div class="form-group">
                        {!! form::label('ID') !!}
                        {!! $appointmentshow->id !!}
                    </div>
                        

                    
                    
                    
                    <div class="form-group">
                        {!! form::label('Fecha:') !!}
                       {{ $categorias->fecha}}
                    </div>


                      <div class="form-group">
                        {!! form::label('Hora:') !!}
                       {{ $categorias->time}}
                    </div>


                      <div class="form-group">
                        {!! form::label('Estado:') !!}
                       {{ $categorias->estado}}
                    </div>
                            
                            <div class="form-group">
                        {!! form::label('Paciente:') !!}
                       {{ $categorias->afil.' '. $categorias->segundo.' '.$categorias->apellido.' '.$categorias->apellido2}}
                    </div>
                        
                         <div class="form-group">
                        {!! form::label('Entidad:') !!}
                       {{ $categorias->entidad}}
                    </div>


                      <div class="form-group">
                        {!! form::label('Empleado:') !!}
                       {{ $categorias->usuario}}
                    </div>
                    
                    
                    
                       

                           

                    {!! form::submit('Aceptar',['name'=>'guardar', 'id'=>'gusrdar',
                    'content'=>'<span>Guardar</>', 'class'=> 'btn btn-warning btn-sm m-t-10']) !!}

                         <button type="button" id="cancelar" name="cancelar" class="btn btn-default btn-sm m-t-10"
                            onClick="location.href='{{ route('appointment_calendar.index')}}'"
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