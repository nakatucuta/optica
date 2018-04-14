
<div class="container">
    <div class="row">
    
        <div class="col-md-10 col-md-offset-1">
        
           <div class="panel panel-default" id="nene">
            
                <div class="panel-heading" id="nene" ><strong>Listado</strong></div>

                     <table class="table table-hover table-striped table-responsive" >

                        <tr id="tit">
                            <th width="20px">ID</th>
                            <th>Nombre</th>
                            <th>entidad</th>
                            <th>fecha</th>
                            
                            <th>
                            <button type="button" class="btn btn-primary pull-right "  id="color-boton" name="cancelar" 
                            onClick="location.href='{{ route('affiliation.create')}}'"
                    >Nuevo</button><!-- aqui llamo a la modal ojo -->
                         
                            </th>

                        </tr>
                            
                            <tbody>
                                @foreach($categorias as $entidad)
                    <tr>
                        <td>{{ $entidad->id}}</td>
                        <td>{{ $entidad->nombre.' '. $entidad->segundo.' '. $entidad->apellido1.' '. $entidad->apellido2}}</td><!-- ojo para concatenar -->
                        <td>{{ $entidad->eps}}</td>
                        <td>{{ $entidad->nn}}</td><!-- ojo asi muestras la fecha y hora que ingresan -->

                        <td><ul class="nav navbar-nav">
                    
                    
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" >Opciones <span class="caret"></span>
                        
                        </a>
                        <!--aqui terminan los item-->

                        <!--asi comienzo un menu desplegable-->
                        <ul class="dropdown-menu" >

                            <li><a href="{{route('affiliation.edit', $entidad->id)}}">Editar</a></li>

                            <li><a href="{{route('mostrar_afiliado', $entidad->id)}}">Detalle</a></li>

                            <li><a href="{{route('pdfaffiliation',$entidad->id)}}">Reporte</a>
                            
                            </li>
                            
                            <li><a href="{{route('affiliation.show', $entidad->id)}}">Eliminar</a></li>

                            
                        

                        

                        </ul>
                    </li>

                </ul>
                </td>
                        

                     
                            @endforeach
                             </tr>
                            </tbody>
                        </table>

                        {!! $categorias->render()!!}
                    

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>