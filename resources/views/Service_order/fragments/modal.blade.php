


<a ><!-- aqui comienza la modal -->

                        	<!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-primary pull-right  " data-toggle="modal" data-target="#myModal"  id="color-boton">Nuevo</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
  
 
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Crear orden de servicio</h4>
        </div>
        <div class="modal-body">
		  @include('Service_order.fragments.error')
         <table>
         	<tr>
			
			 
         		{!! Form::open(['route'=>'service_order.store']) !!} <!-- este es el que se comunica con el controlador en esa ruta con una variable -->
				 
		@include('Service_order.fragments.form')<!-- este es el que manda los formularios creados en el form que esta en fragment -->

		{!! Form::close() !!}
         	</tr>
         </table>
		 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


  </a><!-- aqui termina la modal -->