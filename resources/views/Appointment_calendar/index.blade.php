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

#nenes{

	background-color: red;
}

#neness{
	background-color: blue;
}



#nenesss{
	background-color: green;
}




/*table tr  :hover{

font: 120% sans-serif;
    background-color: blue;
    font-family: "Adobe Gothic Std B"; 
   
}*/


</style>

<!-- OJOO AS EL BUSCAR DE CITAS Y EL INTELIGENTE DE LOS VIDEOS -->



       @include('Appointment_calendar.fragments.info')
 		
@include('Appointment_calendar.search')<!-- arreglalo ojo -->


          <section class="content-header">
<h1 class="pull-left">Historias</h1>
<h1 class="pull-right">

	
	<a class="btn btn-primary pull-right"
	style="margin-top: -10px;
	margin-bottom: 5px" href="{{ route('appointment_calendar.create')}}">Nueva cita</a>
	
</h1>
</section>
			
                

						<div class="content">
	<div class="clearfix"></div>
	<div class="box box-primary">
		<div class="box-body">
		<table class="table table-hover table-striped table-responsive" id="customers">
		<thead>

                        <tr id="tit">
                        <th width="20px">ID</th>
                        	<th>Fecha</th>
                        	<th>Hora</th>
                        	<th>Estado</th>
                        	<th>Paciente</th>
                        	
                        	
                        </tr>


                        <tbody>
								@foreach($categorias as $entidad)
                        <tr >
                       <td>{{ $entidad->id}}</td>
                        <td>{{ $entidad->date}}</td>
                        <td>{{ $entidad->time}}</td>
                        
                        @if($entidad->state_id == 1)

								<td  id="neness">{{  $entidad->state->name}}</td>
								
					   			@endif

					   			@if($entidad->state_id == 2)


					   			<td  id="nenesss">{{  $entidad->state->name}}</td>
					   			@endif

					   			@if($entidad->state_id == 3)

					   			
					   			<td  id="nenes">{{  $entidad->state->name}}</td>
					   			@endif


                        <td>{{ $entidad->affiliation->natural_person->first_name.' '.$entidad->affiliation->natural_person->second_name.' '.$entidad->affiliation->natural_person->surname.' '.$entidad->affiliation->natural_person->second_surname}}</td>
                       
                       
                        	

					   			 <td>{{ $entidad->agesc }}</td>
					   			
					   			
                       

                        
                       
                       
						
						<td>
								
							<a href="{{route('appointment_calendar.edit', $entidad->id)}}" title="EDITAR"><span class="icon-pencil2" title="EDITAR"></span></a>
							
							<a href="{{route('mostrar_cita', $entidad->id)}}" title="DETALLE"> <span class="icon-zoom-in" id="icono"></span></a>
							
							<a href="{{route('appointment_calendar.show', $entidad->id)}}" ><span class="icon-bin" title="ELIMINAR"></span></a>
							
						

				</td>

                        @endforeach
							 </tr>
							</tbody>
                        </table>

                        {!! $categorias->render()!!}

        
            </div>
        </div>
    </div>
</div>

@stop