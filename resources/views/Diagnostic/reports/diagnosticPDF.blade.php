
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
       <title>Document</title>
   </head>
   <body>
        
    <header>  
  <img src="images/logo.jpg" alt="" style=" float: left; width: 100px" >

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
              <p>
           
    
    
    
        
       
            
                <div> <strong>HC N:{{$diagnostic->id}} &nbsp; &nbsp;</strong> <strong>CC:</strong> &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->identification}}  &nbsp; &nbsp;  &nbsp; &nbsp;
                               Ultimo Control: &nbsp; {{$categorias->ultimo_ontrol}} &nbsp; &nbsp;  &nbsp; &nbsp;
                               
                               Proximo Control: &nbsp; {{$categorias->próximo_control}}</div> 

                     <table    id="customers">

                        <tr>
                        
                            <td style="border-left: none;">

                              
                                
                                <!-- NOMBRE COMPLETO -->
                              Nombre: &nbsp; &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->first_name.' '.$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->second_name.' '.$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->surname.' '.$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->second_surname}} &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <strong>Edad:</strong> {{ Carbon\Carbon::parse($diagnostic->patient_income->appointment_calendar->affiliation->natural_person->date_of_birth)->age}}
                              <br><!-- FECHA DE NACIMIENTO -->
                              Fecha de Nacimiento: &nbsp; &nbsp;{{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->date_of_birth}}
                              <br> <!-- DIRECCION -->
                              Direccion: &nbsp; &nbsp; &nbsp; &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->address}}
                              <br><!-- OCUPACCION -->
                              Ocupaccion: &nbsp; &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->occupation}}
                              <br>
                              Acompañante:  {{$diagnostic->patient_income->companion}}

                              
                              <td style="border-right:  none ; ">
                                <!-- TELEFONO -->
                               Telefonos: &nbsp; &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->phone_number}}
                               <br><!-- SEXO -->
                               Genero: &nbsp; &nbsp; {{$categorias->name_gender}}
                               <br><!-- EMAIL -->
                               Correo: &nbsp; &nbsp; {{$diagnostic->patient_income->appointment_calendar->affiliation->natural_person->email}}
                               <br><!-- Telefono de responsavle -->
                               Tel Responsable: &nbsp; {{$diagnostic->patient_income->phone_responsible}}
                                <!-- OJO AQUI VA LA OTRA SECCION DE LA PRIMERA PARTE -->
                              </td>



                            </td>
                            
                            
                            
                           

                        </tr>
                            
                            <tbody>
                                
                    <tr>
                        
                      

                        <td style="border-left: none;">
                          <!-- AQUI VA LA ENTIDAD -->
                          Entidad:&nbsp; <strong>{{$categorias->name_type}}</strong>  &nbsp;  {{$diagnostic->patient_income->appointment_calendar->affiliation->legal_entity->business_name}}
                          <br>
                            A.F: &nbsp; (no se cual es)
                          <br><!-- AP -->
                          A.P: &nbsp;{{$categorias->antecedents }}
                           </td>
                         

                        <td style="border: none; border-bottom: 1px solid ; border-left: 1px solid;">
                          
                            <!-- AQUI VA LO QUE ANOTES EN DESCRIPTION INCOME -->
                          Motivo Consulta: &nbsp; {{$diagnostic->patient_income->description_income}}
                          

                        </td>
                        
                            

                        

                        
                     
                            
                             </tr>

                             <tr>
                               <td style="border: none;">OJO DERECHO &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;REFRACTIVO</td>
                               <td style="border: none; text-align: left;">OJO IZQUIERDO&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;REFRACTIVO</td>
                                
                             </tr>

                             <tr >
                               <td style="border-left: none;" id="ancho">
                                 
                                 
                                 RX en uso M: &nbsp; {{$diagnostic->right_eye->rx_en_uso_m}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PH Lejos:{{$diagnostic->right_eye->refractive->ph_lejos}}
                                 <br>
                                 RX en uso LC: &nbsp; {{$diagnostic->right_eye->rx_en_uso_lc}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PH Cerca:{{$diagnostic->right_eye->refractive->ph_cerca}}
                                 <br>
                                 AV sin RX Lej: &nbsp; {{$diagnostic->right_eye->av_sin_rx_lej}}
                                
                                 <br>
                                 AV con RX M Lej: &nbsp; {{$diagnostic->right_eye->av_con_rx_m_lej}}
                                 <br>
                                 AV  sin RX cer: &nbsp; {{$diagnostic->right_eye->av_sin_rx_cerca}}
                                
                                 <br>
                                 AV con RX M cer: &nbsp; {{$diagnostic->right_eye->av_con_rx_m_cerca}}
                                  &nbsp; &nbsp; &nbsp; &nbsp;
                                 Queratometría: &nbsp; {{$diagnostic->right_eye->queratometría}}
                                 <br>
                                 Sub S Ciclopejia: &nbsp; {{$diagnostic->right_eye->sub_s_ciclopejia}}
                                
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  Refraccion: &nbsp; {{$diagnostic->right_eye->refracción}}
                                 <br>
                                 Ref C Ciclopejia: &nbsp; {{$diagnostic->right_eye->ref_c_ciclopejia}}
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                 Examen externo: &nbsp; {{$diagnostic->right_eye->external_examination}}
                                 <br>
                                 Sub C Ciclopejia: &nbsp; {{$diagnostic->right_eye->sub_c_ciclopejia}}
                                <br>
                                 Rx Final: &nbsp; {{$diagnostic->right_eye->rx_final}}



                               </td>

                               <td style="border-right: none;">
                                 
                                
                                 RX en uso M: &nbsp; {{$diagnostic->left_eye->rx_en_uso_ml}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PH Lejos:{{$diagnostic->left_eye->refractive->ph_lejosl}}
                                 <br>
                                 RX en uso LC: &nbsp; {{$diagnostic->left_eye->rx_en_uso_lcl}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; PH Cerca:{{$diagnostic->left_eye->refractive->ph_cercal}}
                                 <br>
                                 AV sin RX Lej: &nbsp; {{$diagnostic->left_eye->av_sin_rx_lejl}}
                                 
                                 <br>
                                 AV con RX M Lej: &nbsp; {{$diagnostic->left_eye->av_con_rx_m_lejl}}
                                 <br>
                                 AV  sin RX cer: &nbsp; {{$diagnostic->left_eye->av_sin_rx_cercal}}
                                
                                 <br>
                                 AV con RX M cer: &nbsp; {{$diagnostic->left_eye->av_con_rx_m_cercal}}
                                 &nbsp; &nbsp; &nbsp; &nbsp;
                                 Queratometría: &nbsp; {{$diagnostic->left_eye->queratometríal}}
                                 <br>
                                  Sub S Ciclopejia: &nbsp; {{$diagnostic->left_eye->sub_s_ciclopejial}}
                                 
                                 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                 Refraccion: &nbsp; {{$diagnostic->left_eye->refracciónl}}
                                
                                 <br>
                                 Ref C Ciclopejia: &nbsp; {{$diagnostic->left_eye->ref_c_ciclopejial}}
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                 Examen externo: &nbsp; {{$diagnostic->left_eye->external_examinationl}}
                                 <br>
                                 Sub C Ciclopejia: &nbsp; {{$diagnostic->left_eye->sub_c_ciclopejial}}
                                 <br>
                                 Rx Final: &nbsp; {{$diagnostic->left_eye->rx_finall}}

                               </td>
                             </tr>

                             <tr>
                                <td style="border: none;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  OJO DERECHO &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;SEGMENTO ANTERIOR</td>
                               <td style="border: none; text-align: left;"> <!-- <div id="posicion3"> SEGMENTO ANTERIOR</div> --> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; OJO IZQUIERDO</td>
<!-- 
                               <tr>
                                <td style="border: none;">SEGMENTO ANTERIOR  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; OJO DERECHO</td>
                               <td style="border: none; text-align: left;">SEGMENTO ANTERIOR &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; OJO IZQUIERDO</td>

                             </tr> -->

                             </tr>

                             <tr>
                               <td >
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Motilidad Ocular</strong>
                                 <br>
                                 Parpado: &nbsp; {{$diagnostic->right_eye->previus_segment->parpado}}
                                   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; APL: &nbsp; {{$diagnostic->right_eye->previus_segment->apl}}
                                
                                 <br>
                                 Vías Lagrimales: &nbsp; {{$diagnostic->right_eye->previus_segment->vías_lagrimales}}
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                  Tonometría: &nbsp; {{$diagnostic->right_eye->previus_segment->tonometría}}
                                 <br>
                                  Sensib Contraste: &nbsp; {{$diagnostic->right_eye->previus_segment->sensib_contraste}}
                                 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  
                                 Biomicroscopía: &nbsp; {{$diagnostic->right_eye->previus_segment->biomicroscopía}}
                                  
                                  <br>
                                  Pupila: &nbsp; {{$diagnostic->right_eye->previus_segment->pupila}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 Resultado: &nbsp; {{$diagnostic->right_eye->previus_segment->resultado}}
                                  <br>
                                 Tipo Sch: &nbsp; {{$diagnostic->right_eye->previus_segment->tipo_sch}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                Aca: &nbsp; {{$categorias->aca}}
                                 <br>
                                 L Intraoculares: &nbsp; {{$diagnostic->right_eye->previus_segment->l_intraoculares}}
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 Cover Test: &nbsp; {{$categorias->cover_test}}
                                 <br>
                                 Test Color: &nbsp; {{$diagnostic->right_eye->previus_segment->test_color}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  ppc: &nbsp; {{$categorias->ppc}}
                                 <br>
                                 T Estereopsis: &nbsp; {{$diagnostic->right_eye->previus_segment->t_estereopsis}}
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  Afc: &nbsp; {{$categorias->afc}}
                                  &nbsp; &nbsp; 
                                  OJO DTE: {{$categorias->ojo_dte}}
                               </td>
                              

                               <td>
                                     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<strong>Motilidad Ocular</strong>
                                   <br>
                                    Parpado: &nbsp; {{$categorias->parpadol}}
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; APL: &nbsp; {{$categorias->apll}}
                                     
                                 <br>
                                 Vías Lagrimales: &nbsp; {{$categorias->vías_lagrimalesl}}
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                  Tonometría: &nbsp; {{$categorias->tonometríal}}
                                 <br>
                                  Sensib Contraste: &nbsp; {{$diagnostic->right_eye->previus_segment->sensib_contraste}}
                                 &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;   
                                 Biomicroscopía: &nbsp; {{$categorias->biomicroscopíal}}
                                  <br>
                                  Pupila: &nbsp; {{$categorias->pupilal}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                                 Resultado: &nbsp; {{$categorias->resultadol}}
                                  <br>
                                 Tipo Sch: &nbsp; {{$categorias->tipo_schl}} 
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; Aca:{{$diagnostic->left_eye->acal}}
                                  <br>
                                 
                                 
                                 L Intraoculares: &nbsp; {{$categorias->l_intraocularesl}}
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                  Cover Test:{{$diagnostic->left_eye->cover_testl}}
                                 <br>
                                 Test Color: &nbsp; {{$categorias->test_colorl}}
                                 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                                 ppc:{{$diagnostic->left_eye->ppcl}}
                                 <br>
                                 T Estereopsis: &nbsp; {{$categorias->t_estereopsisl}}
                                  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                 Afc:{{$diagnostic->left_eye->afcl}}
                                 &nbsp; &nbsp; &nbsp; &nbsp;
                                     OJO DTE:{{$diagnostic->left_eye->ojo_dtel}}

                               </td>
                             </tr>

                             <tr>
                                <td style="border: none;">SEGMENTO POSTERIOR</td>
                               <td style="border: none; text-align: left;"></td>

                             </tr>
                                 <tr>     
                             <td style="border-left: none;">
                               Conducta: &nbsp; {{$categorias->conducta}}
                               <br>
                               Diagnostico Principal: &nbsp; {{$categorias->nameprincipaldiagnostic}}
                               <br>
                               Diagnostico Relacional: &nbsp; {{$categorias->diagnóstico_rela}}
                              

                             </td>

                             <td style="border-right: none;">
                              
                              <!-- OJO AQUI ESTA el que se ve  VACIO -->

                                <!--   </td>

                             <td style="border-right: none;">
                              <strong>OJO DERECHO</strong>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <strong>OJO IZQUIERDO</strong>
                                <br>
                              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
                              <br>
                              
                              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Cover Test:{{$diagnostic->left_eye->cover_testl}}
                              <br>
                             
                              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ppc:{{$diagnostic->left_eye->ppcl}}
                              <br>
                              
                              &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Afc:{{$diagnostic->left_eye->afcl}}
                              <br>
                              
                               &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                               OJO DTE:{{$diagnostic->left_eye->ojo_dtel}}


                             </td> -->
                             </td>
                              </tr>
                            </tbody>
                        </table>

                       
                    

                
            </div>
            <br>
            

   


             </p>
             </section>
    
        


    <footer style="border: 1px solid ;  font-size: 9;" align="center">
        
          <h4 align="center">CONSENTIMIENTO INFORMADO</h4>
          Manifiesto que he sido informado a mi entera satisfaccion del diagnostico que padezco, sus caracteristicas y manifestaciones principales, los posibles tratamientos para mi recuperacion y eventuales complicaciones que se derivan de los mismos


        
    </footer>

    <!--  <div>
      <p style="float: right;">
      ___________________________________
      <br>
      Profesional:
      
    </p>
      
         ___________________________________
    <br>
    Firma paciente
      
    

    </div> -->
    
    <div id="pocisionfirmaprofesional">
     ___________________________________
      <br>
      Profesional:</div>
    
      
      <div id="pocisionfirmapaciente">
         ___________________________________
    <br>
    Firma paciente
      
    

    </div>
   

  


   </body>
   </html>

