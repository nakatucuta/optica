

<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('user_id','Usuario:')!!}

{!!Form::select('user_id',$person,$permisos->user_id,['id'=>'person','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>


 
<div class="row">

<div class="col-md-4">

  <div class="panel panel-info">
                <div class="panel-heading">
                   insertar persona 
                </div>

                <div class="panel-body">
   

    
    <div class="form-check form-check-inline">
    {{Form :: radio ('insert_n', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insert_n', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>
    </div>
    </div>

    </div>


    <div class="col-md-4">
 
     <div class="panel panel-info">
                <div class="panel-heading">
                   editar persona 
                </div>

                <div class="panel-body">
    
    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_natural', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_natural', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>
    
  </div>
  </div>
    </div>


     <div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   eliminar persona 
                </div>

                <div class="panel-body">
    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_natural', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_natural', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>
    </div>
    </div>

    </div>
</div>



<!-- AQUI COMIENSAN PERMISOS DE AFILIACION -->
<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar afiliacion 
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_afiliacion', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_afiliacion', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar afiliacion 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_afiliacion', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_afiliacion', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar afiliacion 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_afiliacion', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_afiliacion', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>




<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar citas 
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_citas', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_citas', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar citas 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_citas', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_citas', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar citas 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_citas', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_citas', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>




<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar ingreso 
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_ingreso', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_ingreso', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar ingreso 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_ingreso', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_ingreso', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar ingreso 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_ingreso', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_ingreso', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>






<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar autorizacion 
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_autorizacion', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_autorizacion', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar autorizacion 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_autorizacion', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_autorizacion', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar autorizacion 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_autorizacion', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_autorizacion', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>




<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar historia clinica 
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_historialc', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_historialc', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar historia clinica 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_historialc', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_historialc', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar historia clinica 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_historialc', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_historialc', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>







<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar entidad
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_entidades', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_entidades', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar entidades 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_entidades', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_entidades', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar entidades 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_entidades', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_entidades', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>




<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar servicio
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_servicios', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_servicios', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar servicio 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_servicios', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_servicios', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar servicio 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_servicios', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_servicios', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>




<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar Producto
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_producto', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_producto', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar Producto 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_producto', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_producto', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar Producto 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_producto', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_producto', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>



<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar Devolucion
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_devolucion', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_devolucion', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>







<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar Devolucion 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_devolucion', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_devolucion', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>


<div class="col-md-4">


<div class="panel panel-info">
                <div class="panel-heading">
                   Ventas
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('vender', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('vender', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div> 


</div>



</div>





<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar factura
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_factura', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_factura', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>







<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar factura 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_factura', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_factura', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>



<div class="row">
  

<div class="col-md-4">

   <div class="panel panel-info">
                <div class="panel-heading">
                   insertar abonos
                </div>

                <div class="panel-body">

            <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_abonos', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('insertar_abonos', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>

</div>
</div>  
</div>


<div class="col-md-4">
  <div class="panel panel-info">
                <div class="panel-heading">
                   editar abonos 
                </div>

                <div class="panel-body">

                      <div class="form-check form-check-inline">
    {{Form :: radio ('editar_abonos', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('editar_abonos', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>



</div>
</div>  

</div>




<div class="col-md-4">
  
<div class="panel panel-info">
                <div class="panel-heading">
                   eliminar abonos 
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_abonos', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('eliminar_abonos', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div>  
</div>

</div>





<div class="row">
<div class="col-md-4">


<div class="panel panel-info">
                <div class="panel-heading">
                   Tipo de producto
                </div>

                <div class="panel-body">
                  

                               <div class="form-check form-check-inline">
    {{Form :: radio ('tipo_producto', 1, null, ['class' => 'field'])}}
   <label >Activo</label>
   </div>

    <div class="form-check form-check-inline">
    {{Form :: radio ('tipo_producto', 0, null, ['class' => 'field'])}}
   <label >Inactivo</label>
   </div>


</div>
</div> 


</div>
</div>




<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>





<script>
$("#person").select2({
 theme: "classic"
})



</script>