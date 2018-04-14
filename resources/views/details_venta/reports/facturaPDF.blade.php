
<style>

#tit{
    background-color: blue;
}

#todo{

    
}

.franja{    
    height:30px;
    background: #D34646;
}




.posicion{
position: relative;
  top:  0;/*abajo*/
  bottom: 100px ;
  right: 0px ;
  left: 570px;
  

  width: 150px;
  background-color: green;
}


.posicion2{
position: relative;
  top: 0px ;/*abajo*/
  bottom: 0px ;
  right: 0px ;
  left: 170px;
  

  width: 240px;
  
 

   font-size: 10;
 
}


#posicion3{
position: fixed;
  top: 484px ;/*abajo*/
  bottom: 0px ;
  right: 0px ;
  left: 290px;
  

 
}




#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 75%;
}

#customers td, #customers th {
    border: 1px solid ;
    padding: 8px;
}





#customers th {
    padding-top: 2px;
    padding-bottom: 12px;
    text-align: left;
    background-color: none;
    color: black;
}
 
 
#repinta {

    border: 1px solid ;
   /* width: 40%;
    height: 13%;*/
    text-align:center;

}

#derecha {

    float: left;
}

#sinnada{
    border: none;
}
   
</style>










  <img src="images/logo.jpg" alt="" style=" float: left; width: 100px" >

  <div   style="width: 140px; height: 30px;  float: right; border: groove; font-size: 9; ">
        <strong >Fecha:</strong> 
          {{$cart->created_at->format('Y-m-d')}}
          <br>
          
          <strong>Hora:</strong>
          {{$cart->created_at->format('h:i:s')}}

    </div>



     <div  class="posicion2" align="left">
       


      <strong style="font-size: 10;" >Optisoft De La Guajira <br> Nit: 52518498-8 <br> Regimen:simplificado</strong> <br> <p align="center"></p>
      <p > Calle 14 N 10-27 - Riohacha 
     
     Tel:7270224 - 3106267867
     </p>
     
     
    </div>

       


     <hr><!-- LINEA OOJO -->


   



  <strong>Cant:</strong> {{$cart->details->count() }} Productos.  
                   
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>CC:</strong> {{$consulta->identification}} 
<br>   &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;<strong>Nombre:</strong> {{$consulta->first_name.' '.$consulta->second_name.' '.$consulta->surname.' '.$consulta->second_surname}}
                      


   
    
        
        <table   id="customers" align="center">
        <thead>

                        <tr>
                            
                          
                            
                            
                           
                            <th>Articulo</th>
                            <th>Cant</th>
                            <th>Subtotal</th>
                            <br>

                        </tr>
                            
                            <tbody>
                             @foreach($cart->details as $detaile)
                        <tr>
                             

                        <td><strong>{{ $detaile->product->name}}</strong> </td>
                        <td>(x{{$detaile->quantity}})</td>
                         <br>
                            
                         <td> ($ {{  number_format($detaile->quantity * $detaile->product->price , 0) }})</td>
                     

                     
        
        @endforeach

        
                             </tr>
                             <td style="border-style: none;"></td>
                                <td style="border-style: none;"></td>
                             
                             <td style="border-style: none; font-size: 10;"><strong>total</strong><br>${{ number_format($cart->total  - $cart->Totaldev , 0)}}<br><!-- ojo el total de tds ls productos -->
                                        
                                

                                
                    <!-- ojo recuerda que esta condicion esta en caso de que se devuelvan todos los productos de una factura para que no te de valores negativos -->
                               

                                        @if($cart->paid_value < $cart->total)
                                    <strong>ABONO</strong> <br> ${{number_format($cart->paid_value, 0)}}
                                    @foreach($cart->credits as $credit)
                                    <br>${{number_format($credit->value, 0)}} <!-- <strong style="font-size: 5;" align="right"> ({{$credit->date}})</strong> -->

                                    @endforeach

                                    @else
                                    <strong>TIPO VENTA</strong> <br> CONTADO:

                                @endif
                                    
                                    <!-- este if maneja cuando devuelves  ya habiendo pagado toda la factura -->

                                @if(($cart->total - $cart->paid_value - $cart->Sumabn) - $cart->Totaldev < 0)

                                 <br> <strong>SALDO:</strong> <br> $0

                                  <br> <strong>SALDO A FAVOR:</strong> <br> ${{number_format(($cart->total - $cart->paid_value - $cart->Sumabn - $cart->Totaldev) * -1, 0)}}

                                 @else
                                        
                                        <br> <strong>SALDO:</strong> <br> ${{number_format(($cart->total - $cart->paid_value - $cart->Sumabn) - $cart->Totaldev, 0)}}    

                                @endif
                                       


                                         
                               
                                </td>
                            </tbody>
                            
                        </table>
                                    
                                    
                                     
                                     
                        

                
            
   



   



               
            
                <!--  <strong>Devoluciones</strong>  -->
             @foreach($cart->devolutions as $dev)

              <table   id="customers" align="center"  style="width: 75%;">
                 <thead>
                      <tr>
                        <th style="border-style: none;"></th>
                        
                        </tr>
                        <tbody>
                            
                            <tr ">
                                
                                    <td><h6>Producto devuelto..!</h6>{{$dev->product->name}}<strong>(x{{$dev->quantity}})</strong></td>
                                   
                            </tr>


                        </tbody>
                    </table>
                        <!-- <p><strong>{{$dev->count()}}</strong></p>
                        <p><strong></strong></p>
                        <p><strong></strong></p>
 -->


        @endforeach
             
           <!-- <div align="center" > <strong >${{$cart->Totaldev }}</strong> </div>  -->
     