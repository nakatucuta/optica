
   <style>
        
#tit{
    background-color: blue;
}

#todo{

    
}

   </style>

<div class="container">
    <div class="row">
	
        <div class="col-md-10 col-md-offset-1">
		
           <div class="panel panel-default" id="nene">
			
                <div class="panel-heading" id="nene" ><strong>Listado</strong></div>

					 <table class="table table-hover table-striped table-responsive" id="todo" >

                        <tr id="tit">
                        	<th width="20px">ID</th>
                        	<th>Nombre</th>
                        	<th>entidad</th>
                        	<th>fecha</th>
                        	
                        	<th>
							
                         
							</th>

                        </tr>
                        	
							<tbody>
								
					<tr>
						<td>{{ $affiliation->id}}</td>
						<td>{{ $categorias->nombre.' '. $categorias->segundo.' '. $categorias->apellido1.' '. $categorias->apellido2}}</td><!-- ojo para concatenar -->
						<td>{{ $categorias->eps}}</td>
						<td>{{ $categorias->nn}}</td><!-- ojo asi muestras la fecha y hora que ingresan -->

						
					 
							
							 </tr>
							</tbody>
                        </table>

                       
                    

                <div class="panel-body">
                    
                </div>
            </div>
        </div>
    </div>
</div>
