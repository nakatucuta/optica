
   <style>

   html {
margin: 4mm;
}
/*body {
font-family: "Times New Roman", serif;
margin: 45mm 8mm 2mm 8mm;
}*/
        
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
  left: 230px;
  

  width: 240px;
  
 

   font-size: 10;
 
}


#posicion3{
position: fixed;
  top: 487px ;/*abajo*/
  bottom: 0px ;
  right: 0px ;
  left: 290px;
  

 
}

#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    font-size: 9;
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


#ancho{
  width: 50%;
}


#pocisionfirmapaciente{
  position: fixed;
  top: 1000px ;/*abajo*/
  bottom: 0px ;
  right: 0px ;
  left: 0px;
  

}

#pocisionfirmaprofesional{

   position: fixed;
  top: 1000px ;/*abajo*/
  bottom: 0px ;
  right: 0px ;
  left: 450px;
}
   </style>



   <!DOCTYPE html>
   <html lang="en">
   <head>
     <meta charset="UTF-8">
     <title>Formula</title>
   </head>
   <body>
        <header>  
  <img src="images/logo.jpg" alt="" style=" float: left; width: 100px " >

  <div   style="width: 140px; height: 30px;  float: right; border: groove; font-size: 9; ">
        <strong >Fecha:</strong> 
          {{$diagnostic->created_at->format('Y-m-d')}}
          <br>
          
          <strong>Hora:</strong>
          {{$diagnostic->created_at->format('h:i:s')}}

    </div>



     <div  class="posicion2" align="left">
       


      <strong style="font-size: 10;" >Optisoft De La Guajira <br> Nit: 52518498-8 <br> Regimen:simplificado</strong> <br> <p align="center"></p>
      <p > Calle 14 N 10-27 - Riohacha 
     
     Tel:7270224 - 3106267867
     </p>
     
     
    </div>

       


     <hr><!-- LINEA OOJO -->


      
    </header>


    <section>
      
        
          <strong>Identificasion:</strong>  &nbsp; &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->identification}}
           &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Edad:</strong> &nbsp; &nbsp;  {{ Carbon\Carbon::parse($diagnostic->patient_income->appointment_calendar->affiliation->natural_person->date_of_birth)->age}}
          <br>
          <strong>Paciente:</strong> &nbsp; &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->first_name.' '.$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->second_name.' '.$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->surname.' '.$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->second_surname}}
          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Diagnostico:</strong>
          <br>

          <strong>Direccion:</strong> &nbsp; &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->address}}

          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Telefono:</strong> &nbsp; &nbsp;
          {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->phone_number}}
          <br>
          <strong>Regimen:</strong>

          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Afiliacion:</strong> &nbsp; &nbsp;
          {{$diagnostic->patient_income->appointment_calendar->affiliation->legal_entity->business_name}}
         <br><br><!-- ojo antes estab en una etiquete p de parafo  -->
        <table  id="customers">
                      <thead>

                        <tr>
                          
                          <th></th>
                          <th>ESFERA</th>
                          <th>CILINDRO</th>
                          <th>EJE </th>
                          <th>ADICION</th>
                          <th>PRISMA BASE</th>
                          <th>GRADOS</th>
                          <th>AV LEJOS</th>
                          <th>AV CERCA</th>

                        </tr>
                          
              <tbody>
               
          <tr>
            
            
                                <td>OD</td>
                                <td>{{$diagnostic->right_eye->esfera}}</td>
                                <td>{{$diagnostic->right_eye->cilindro}}</td>
                                <td>{{$diagnostic->right_eye->eje}}</td>
                                <td>{{$diagnostic->right_eye->adicion}}</td>
                                <td>{{$diagnostic->right_eye->prisma_base}}</td>
                                <td>{{$diagnostic->right_eye->grados}}</td>
                                <td>{{$diagnostic->right_eye->av_con_rx_m_lej}}</td>
                                <td>{{$diagnostic->right_eye->av_con_rx_m_cerca}}</td>
         

           
             
               </tr>
               <tr>
                 
                                <td>OI</td>
                                <td>{{$diagnostic->left_eye->esferal}}</td>
                                <td>{{$diagnostic->left_eye->cilindrol}}</td>
                                <td>{{$diagnostic->left_eye->ejel}}</td>
                                <td>{{$diagnostic->left_eye->adicionl}}</td>
                                <td>{{$diagnostic->left_eye->prisma_basel}}</td>
                                <td>{{$diagnostic->left_eye->gradosl}}</td>
                                <td>{{$diagnostic->left_eye->av_con_rx_m_lejl}}</td>
                                <td>{{$diagnostic->left_eye->av_con_rx_m_cercal}}</td>
               </tr>
              </tbody>
              </table>
              <br>

              <strong>Tipo Lentes:</strong> &nbsp; &nbsp; {{$diagnostic->formula->product->name}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>Altura:</strong>ojo te falta
              <hr>
                <strong>Color y ttos:</strong>&nbsp; &nbsp;{{$diagnostic->formula->color_ttos}}
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <strong>DP:</strong>&nbsp; &nbsp;{{$diagnostic->formula->dp}}
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <strong> Uso de dispositivo</strong>&nbsp; &nbsp;{{$diagnostic->formula->use_device}}
                <hr>
                <strong>Control:</strong> &nbsp; &nbsp; {{Carbon\Carbon::parse($categorias->próximo_control)->age}}Año
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <strong>Vigencia:</strong>&nbsp; &nbsp; {{$diagnostic->formula->validity}}
                <hr>
                <strong>Observaciones:
                  <br></strong>{{$diagnostic->formula->observation}}
                <hr>
      </p>
    </section>




   </body>
   </html>