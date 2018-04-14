
<style>
	#colordiv{

		background-color:  background-color: #f2f2f2;
	}
/*input[type=text] {
    background-color: #f2f2f2;
    color: white;An
}*/

input[type=text]:focus {
    border: 2px solid #555;
}

input[type=date]:focus {
    border: 2px solid #555;
}


</style>

<div id="London" class="tabcontent">
	 <span onclick="this.parentElement.style.display='none'" class="topright">x</span>
</p>
</div>



<div id="Paris" class="tabcontent" style="border-style: none;">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <!-- <h3>Paris</h3>
  <p><h2>este es de right_eye</h2> -->
 
  	<div class="row"  >
  		<div class="panel panel-primary" >
                <div class="panel-heading"  align="center">
                    REFRACCION
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;"style="background-color: #f2f2f2;">
  		<!-- ojo esta es la div central -->

  		<!-- <h6 > &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REFRACCION &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; MOTILIDAD OCULAR  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SEGMENTO ANTERIOR</h6> -->

  		<div class="col-md-3"   >
  			

	<div class="form-group ">
	{!!Form::label('external_examination','Examen externo')!!}

	{!!Form::text('external_examination',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('rx_en_uso_m','rx_en_uso_m')!!}

	{!!Form::text('rx_en_uso_m',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('rx_en_uso_lc','rx_en_uso_lc')!!}

	{!!Form::text('rx_en_uso_lc',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('av_sin_rx_lej','av_sin_rx_lej')!!}

	{!!Form::text('av_sin_rx_lej',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>





</div>

<div class="col-md-3">
	


<div class="form-group">
	{!!Form::label('av_sin_rx_cerca','av_sin_rx_cerca')!!}

	{!!Form::text('av_sin_rx_cerca',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('queratometría','queratometría')!!}

	{!!Form::text('queratometría',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('ph_cerca','ph_cerca')!!}

	{!!Form::text('ph_cerca',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('ph_lejos','ph_lejos')!!}

	{!!Form::text('ph_lejos',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>

<div class="col-md-3" style="" >
	<!-- SEGUDNA DIV QUE DIVIDE LAS REFRACIONES -->

<div class="form-group">
	{!!Form::label('refracción','refracción')!!}

	{!!Form::text('refracción',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

	<div class="form-group">
	{!!Form::label('sub_s_ciclopejia','sub_s_ciclopejia')!!}

	{!!Form::text('sub_s_ciclopejia',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('ref_c_ciclopejia','ref_c_ciclopejia')!!}

	{!!Form::text('ref_c_ciclopejia',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('sub_c_ciclopejia','sub_c_ciclopejia')!!}

	{!!Form::text('sub_c_ciclopejia',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

</div>

<div class="col-md-3">
	

<div class="form-group">
	{!!Form::label('rx_final','rx_final')!!}

	{!!Form::text('rx_final',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('avfl','avfl')!!}

	{!!Form::text('avfl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('add','ADD')!!}

	{!!Form::text('add',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('avfp','AVFP')!!}

	{!!Form::text('avfp',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>

<!-- <div class="col-md-1">
	

aqui estabas los ph



</div>

<div class="col-md-1">
	


</div> -->

</div> 
</div>
</div>
  	

<div class="row">
	<div class="panel panel-primary" >
                <div class="panel-heading"  align="center">
                    EXAMEN MOTOR
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
<div class="col-md-2" style="">
	
	<!-- <h2>este es el de observation</h2> -->

<div class="form-group">
	{!!Form::label('aca','aca')!!}

	{!!Form::text('aca',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('cover_test','cover_test')!!}

	{!!Form::text('cover_test',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>














</div>


<div class="col-md-3">
	<div class="form-group">
	{!!Form::label('ppc',' ppc')!!}

	{!!Form::text('ppc',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('afc','afc')!!}

	{!!Form::text('afc',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

</div>

<div class="col-md-3">
	<div class="form-group">
	{!!Form::label('ojo_dte','ojo_dte')!!}

	{!!Form::text('ojo_dte',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<!-- <div class="form-group">
	{!!Form::label('motilidad_ocular','Motilidad Ocular')!!}

	{!!Form::text('motilidad_ocular',null,['class'=>'form-control'])!!}
</div> -->
</div>



</div>
</div>
</div>


<div class="row">
	<div class="panel panel-primary" >
                <div class="panel-heading"  align="center">
                    SEGMENTO ANTERIOR
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
<div class="col-md-2" style="">
	
	<!-- OJO ESTO ES DE PREVIUS SEGMENT -->
<!-- <h3>segmento anterior</h3> -->


<!-- <div class="form-group">
	{!!Form::label('previous_segments','Segmento Previo')!!}

	{!!Form::text('previous_segments',null,['class'=>'form-control'])!!}
</div> -->


<div class="form-group">
	{!!Form::label('parpado','Parpado')!!}

	{!!Form::text('parpado',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('vías_lagrimales','Vias Lagrimales')!!}

	{!!Form::text('vías_lagrimales',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>





</div>

<div class="col-md-3">
	<div class="form-group">
	{!!Form::label('sensib_contraste','Sencibilad Contraste')!!}

	{!!Form::text('sensib_contraste',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('pupila','Pupila')!!}

	{!!Form::text('pupila',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('tipo_sch','Tipo SCH')!!}

	{!!Form::text('tipo_sch',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

</div>



<div class="col-md-3">
	
<div class="form-group">
	{!!Form::label('apl','APL')!!}

	{!!Form::text('apl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('tonometría','Tonometria')!!}

	{!!Form::text('tonometría',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('l_intraoculares','l_intraoculares')!!}

	{!!Form::text('l_intraoculares',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>

<div class="col-md-2">
	



<div class="form-group">
	{!!Form::label('biomicroscopía','biomicroscopía')!!}

	{!!Form::text('biomicroscopía',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('test_color','Test Color')!!}

	{!!Form::text('test_color',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('t_estereopsis','t_estereopsis')!!}

	{!!Form::text('t_estereopsis',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('resultado','resultado')!!}

	{!!Form::text('resultado',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
	
</div>

</div>
</div>
</div>



</p> 
</div>


<div id="Tokyo" class="tabcontent" style="border-style: none;">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
  <!-- <h3>Tokyo</h3>
  <p><h2>este es de left eye</h2> -->
<div class="row"  >
  		<div class="panel panel-primary"  >
                <div class="panel-heading"  align="center" style="background-color: #4d94ff;">
                    REFRACCION
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
  	<div class="col-md-3">
  		
  		<div class="form-group">
	{!!Form::label('external_examinationl','Examen externo')!!}

	{!!Form::text('external_examinationl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('rx_en_uso_ml','rx_en_uso_m')!!}

	{!!Form::text('rx_en_uso_ml',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('rx_en_uso_lcl','rx_en_uso_lc')!!}

	{!!Form::text('rx_en_uso_lcl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('av_sin_rx_lejl','av_sin_rx_lej')!!}

	{!!Form::text('av_sin_rx_lejl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>


<div class="col-md-3">
	

<div class="form-group">
	{!!Form::label('av_sin_rx_cercal','av_sin_rx_cerca')!!}

	{!!Form::text('av_sin_rx_cercal',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>






<div class="form-group">
	{!!Form::label('queratometríal','queratometría')!!}

	{!!Form::text('queratometríal',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('ph_cercal','ph_cerca')!!}

	{!!Form::text('ph_cercal',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
<div class="form-group">
	{!!Form::label('ph_lejosl','ph_lejos')!!}

	{!!Form::text('ph_lejosl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>


<div class="col-md-3">
	<div class="form-group">
	{!!Form::label('refracciónl','refracción')!!}

	{!!Form::text('refracciónl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('sub_s_ciclopejial','sub_s_ciclopejia')!!}

	{!!Form::text('sub_s_ciclopejial',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('ref_c_ciclopejial','ref_c_ciclopejia')!!}

	{!!Form::text('ref_c_ciclopejial',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('sub_c_ciclopejial','sub_c_ciclopejia')!!}

	{!!Form::text('sub_c_ciclopejial',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>


<div class="col-md-3">
	<div class="form-group">
	{!!Form::label('rx_finall','rx_final')!!}

	{!!Form::text('rx_finall',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('avfll','avfl')!!}

	{!!Form::text('avfll',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('addl','ADD')!!}

	{!!Form::text('addl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('avfpl','AVFP')!!}

	{!!Form::text('avfpl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

</div>
<!-- <div class="col-md-1">
	

ojo aqui ivan los ph




</div>

<div class="col-md-1">
	


</div> -->

</div>
</div>
</div>


<div class="row">	
<div class="panel panel-primary" >
                <div class="panel-heading"  align="center" style="background-color: #4d94ff;">
                    EXAMEN MOTOR
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
<div class="col-md-3">
	<div class="form-group">
	{!!Form::label('acal','ACA')!!}

	{!!Form::text('acal',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('cover_testl','COVER TEST')!!}

	{!!Form::text('cover_testl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>

<div class="col-md-3">
<div class="form-group">
	{!!Form::label('ppcl','PPCL')!!}

	{!!Form::text('ppcl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('afcl','AFCL')!!}

	{!!Form::text('afcl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>

<div class="col-md-3">
	<div class="form-group">
	{!!Form::label('ojo_dtel','OJO DTEL')!!}

	{!!Form::text('ojo_dtel',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>





 </div>
 </div>
</div>




<div class="row">

	<div class="panel panel-primary" >
                <div class="panel-heading"  align="center" style="background-color: #4d94ff;">
                    SEGMENTO ANTERIOR
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
	<div class="col-md-2">
	

<!-- OJO ESTO ES DE PREVIUS SEGMENT -->
<!-- <div class="form-group">
	{!!Form::label('motilidad_ocularl','Motilidad Ocular')!!}

	{!!Form::text('motilidad_ocularl',null,['class'=>'form-control'])!!}
</div> -->

<div class="form-group">
	{!!Form::label('previous_segmentsl','Segmento Previo')!!}

	{!!Form::text('previous_segmentsl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('parpadol','Parpado')!!}

	{!!Form::text('parpadol',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>

<div class="col-md-3">
	
<div class="form-group">
	{!!Form::label('vías_lagrimalesl','Vias Lagrimales')!!}

	{!!Form::text('vías_lagrimalesl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('sensib_contrastel','Sencibilad Contraste')!!}

	{!!Form::text('sensib_contrastel',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('pupilal','Pupila')!!}

	{!!Form::text('pupilal',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>


<div class="col-md-3">
	<div class="form-group">
	{!!Form::label('tipo_schl','Tipo SCH')!!}

	{!!Form::text('tipo_schl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('apll','APL')!!}

	{!!Form::text('apll',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('tonometríal','Tonometria')!!}

	{!!Form::text('tonometríal',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
</div>


<div class="col-md-2">
	<div class="form-group">
	{!!Form::label('l_intraocularesl','l_intraoculares')!!}

	{!!Form::text('l_intraocularesl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('biomicroscopíal','biomicroscopía')!!}

	{!!Form::text('biomicroscopíal',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('test_colorl','Test Color')!!}

	{!!Form::text('test_colorl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('t_estereopsisl','t_estereopsis')!!}

	{!!Form::text('t_estereopsisl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('resultadol','resultado')!!}

	{!!Form::text('resultadol',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

</div>



</div>
</div>
</div>



</p> 
</div>

<!-- <div id="previus" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>



</p> 
</div> -->



<div id="rear" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
<!-- <h2>este es de  rear segment</h2> -->



<div class="form-group">
	{!!Form::label('conducta','conducta')!!}

	{!!Form::text('conducta',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<!-- <div class="form-group">
	{!!Form::label('principal_diagnostic_id','diagnóstico principal id')!!}

	{!!Form::text('principal_diagnostic_id',null,['class'=>'form-control'])!!}
</div> -->


<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('principal_diagnostic_id','diagnóstico principal id')!!}

{!!Form::select('principal_diagnostic_id',$person1,null,['id'=>'person1','class'=>'form-control selectpicker','style'=>'width: 100%'])  !!}<!-- ,'multiple'=>'multiple' -->
</div>
</div>
</div>

<div class="form-group">
{!!Form::label('principal_diagnostic_id','Diagnostico Relacional')!!}
<select class="form-control" multiple="multiple" name="diagnóstico_rela[]" id="person3" style="width: 100%">
	<optgroup label="Trastornos del párpado, aparato lagrimal y órbita">
  <option >(H00) Orzuelo y calacio</option>
  <option> (H01) Otras inflamaciones del párpado</option>
  <option> (H02) Otros trastornos de los párpados </option>
  <option> (H03) Trastornos del párpado en enfermedades clasificadas en otra parte</option>
  <option> (H04) Trastornos del aparato lagrimal</option>
  <option> (H05) Trastornos de la órbita</option>
  <option> (H06) Trastornos del aparato lagrimal y de la órbita en enfermedades clasificadas en otra parte</option>
  <optgroup label="Trastornos de la conjuntiva">
  <option> (H10) Conjuntivitis</option>
  <option> (H11) Otros trastornos de la conjuntiva</option>
  <option> (H13) Trastornos de la conjuntiva en enfermedades clasificadas en otra parte Trastornos de la esclerótica, córnea, iris y cuerpo ciliar </option>
  <option> (H15) Trastornos de la esclerótica </option>
  <option> (H16) Queratitis</option>
   <option>(H17) Opacidades y cicatrices corneales</option>
  <option> (H18) Otros trastornos de la cornea</option>
  <option> (H19) Trastornos de la esclerótica y de la córnea en enfermedades clasificadas en otra parte</option>
  <option> (H20) Iridociclitis </option>
  <option> (H21) Otros trastornos del iris y del cuerpo ciliar</option>
  <option> (H22) Trastornos del iris y del cuerpo ciliar en enfermedades clasificadas en otra parte</option>
  <optgroup label="Trastornos del cristalino ">
  <option> (H25) Catarata senil</option>
  <option> (H26) Otras cataratas </option>
  <option> (H27) Otros trastornos del cristalino </option>
   <option>(H28) Catarata y otros trastornos del cristalino en enfermedades clasificadas en otra parte </option>
  <optgroup label="Trastornos de la coroides y retina ">
  <option> (H30) Inflamación coriorretiniana</option>
  <option> (H31) Otros trastornos de la coroides</option>
  <option> (H32) Trastornos coriorretinianos en enfermedades clasificadas en otra parte</option>
  <option> (H33) Desprendimiento y desgarro de la retina</option>
  <option> (H34) Oclusión vascular de la retina </option>
  <option> (H35) Otros trastornos de la retina</option>
  <option> (H36) Trastornos de la retina en enfermedades clasificadas en otra parte</option>
  <optgroup label=" Glaucoma  ">
   <option>(H40) Glaucoma </option>
  <option> (H42) Glaucoma en enfermedades clasificadas en otra parte</option>
  <optgroup label="  Trastornos del cuerpo vitreo y del globo ocular ">
  <option> (H43) Trastornos del cuerpo vitreo </option>
  <option> (H44) Trastornos del globo ocular </option>
  <option> (H45) Trastornos del cuerpo vitreo y del globo ocular en enfermedades clasificadas </option>
  <optgroup label="  Trastornos del nervio óptico y de las vías ópticas ">
  <option> (H46) Neuritis óptica</option>
  <option> (H47) Otros trastornos del nervio óptico [II par] y de las vías ópticas</option>
  <option> (H48) Trastornos del nervio óptico [II par] y de las vías ópticas en enfermedades clasificadas en otra parte</option>
   <optgroup label="   Trastornos de los músculos oculares del movimiento binocular de la acomodación y de la refracción ">
  <option>(H49) Estrabismo paralítico</option>
  <option>(H50) Otros estrabismos </option>
  <option>(H51) Otros trastornos de los movimientos binoculares</option>
  <option>(H52) Trastornos de la acomodación y de la refracción Alteración de la visión y ceguera </option>
  <option>(H53) Alteraciones de la visión</option>
  <option>(H54) Ceguera y disminución de la agudeza visual Otros trastornos del ojo y sus anexos</option>
  <option>(H55) Nistagmo y otros movimientos oculares irregulares</option>
  <option>(H57) Otros trastornos del ojo y sus anexos </option>
  <option>(H58) Otros trastornos del ojo y sus anexos en enfermedades clasificadas en otra parte</option>
  <option>(H59) Trastornos del ojo y sus anexos consecutivos a procedimientos, no clasificados en otra parte</option>
</select>
</div>


<div class="form-group">
	{!!Form::label('ultimo_ontrol','ultimo_ontrol')!!}

	{!!Form::date('ultimo_ontrol',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>
<div class="form-group">
	{!!Form::label('próximo_control','próximo_control')!!}

	{!!Form::date('próximo_control',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>

</p> 
</div>



<!-- <div id="observacion" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>


</p> 
</div> -->


<div id="diagnostico" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
<!-- <h2>de diagnostic</h2> -->
<!-- <div class="form-group">
	{!!Form::label('code','Codigo')!!}

	{!!Form::text('code',null,['class'=>'form-control'])!!}
</div> -->

<!-- <div class="form-group">
	{!!Form::label('patient_income_id','id Ingreso')!!}

	{!!Form::text('patient_income_id',null,['class'=>'form-control'])!!}
</div> -->
<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('patient_income_id','Paciente:')!!}

{!!Form::select('patient_income_id',$person,null,['id'=>'person','class'=>'form-control selectpicker'])  !!}
</div>
</div>
</div>



<!-- <h2>este es el de historial clinico</h2> -->



<div class="form-group">
	{!!Form::label('description','Descripcion')!!}

	{!!Form::textarea('description',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('past_surgical_history','Historia quirurjica pasada')!!}

	{!!Form::text('past_surgical_history',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>




<div class="form-group">
{!!Form::label('antecedents','Antecedentes')!!}
<select class="form-control" multiple="multiple" name="antecedents[]" id="person4" style="width: 100%">
	<optgroup label="Procedimientos quirurjicos">
		 <option >(1200) extracción de cuerpo extraño intraocular del segmento anterior del ojo, no especificada de otra manera</option>
		 <option>(1201) extracción de cuerpo extraño intraocular del segmento anterior del ojo, con empleo de imán </option>
		 <option>(1259) otra facilitación de la circulación intraocular </option>
		 <option>(1371) inserción de prótesis de cristalino intraocular en el momento de la extracción de la catarata, una sola etapa </option>
		 <option>(1372) inserción secundaria de prótesis de cristalino intraocular  </option>
		 <option>(1391) implantación de prótesis intraocular telescópica </option>
		 <option>(1511) recesión de un músculo extraocular  </option>
		 <option>(1512) avance de músculo extraocular</option>
		 <option>(1513) resección de un músculo extraocular </option>
		 <option >(1519) otras operaciones sobre un músculo extraocular con desprendimiento temporal del globo ocular  </option>
		 <option >(1521) procedimiento de alargamiento sobre un músculo extraocular </option>
		 <option >(1522) procedimiento de acortamiento sobre un músculo extraocular  </option>
		 <option >(1529) otra operación sobre un músculo extraocular  </option>
		 <option >(153x) operaciones sobre dos o más músculos extraoculares con desprendimiento temporal del globo ocular, uno u ambos ojos  </option>
		 <option >(154x) otras operaciones sobre dos o más músculos extraoculares, uno u ambos ojos  </option>
		 <option >(155x) transposición de músculos extraoculares  </option>
		 <option >(156x) revisión de intervención quirúrgica sobre músculo extraocular  </option>
		 <option >(157x) reparación de lesión de músculo extraocular  </option>
		 <option >(159x) otras operaciones sobre músculos y tendones extraoculares  </option>
		 <option >(1639) otra evisceración del globo ocular  </option>
		 <option >(1641) enucleación del globo ocular con implantación simultánea dentro de la cápsula de tenon con adhesión de músculos </option>
		 <option >(1642) enucleación del globo ocular con otra implantación simultánea </option>
		 <option >(1649) otra enucleación del globo ocular </option>
		 <option >(1661) inserción secundaria de implantación ocular </option>
		 <option >(1662) revisión y reinserción de implantación ocular </option>
		 <option >(1669) otros procedimientos secundarios después de extirpación de globo ocular </option>
		 <option >(1671) extracción de implantación ocular </option>
		 <option >(1682) reparación de ruptura de globo ocular </option>
		 <option >(1689) otra reparación de lesión de globo ocular o de órbita </option>
		 <option >(1699) otras operaciones sobre globo ocular </option>
	<optgroup label="Trastornos del párpado, aparato lagrimal y órbita">
  <option >(H00) Orzuelo y calacio</option>
  <option> (H01) Otras inflamaciones del párpado</option>
  <option> (H02) Otros trastornos de los párpados </option>
  <option> (H03) Trastornos del párpado en enfermedades clasificadas en otra parte</option>
  <option> (H04) Trastornos del aparato lagrimal</option>
  <option> (H05) Trastornos de la órbita</option>
  <option> (H06) Trastornos del aparato lagrimal y de la órbita en enfermedades clasificadas en otra parte</option>
  <optgroup label="Trastornos de la conjuntiva">
  <option> (H10) Conjuntivitis</option>
  <option> (H11) Otros trastornos de la conjuntiva</option>
  <option> (H13) Trastornos de la conjuntiva en enfermedades clasificadas en otra parte Trastornos de la esclerótica, córnea, iris y cuerpo ciliar </option>
  <option> (H15) Trastornos de la esclerótica </option>
  <option> (H16) Queratitis</option>
   <option>(H17) Opacidades y cicatrices corneales</option>
  <option> (H18) Otros trastornos de la cornea</option>
  <option> (H19) Trastornos de la esclerótica y de la córnea en enfermedades clasificadas en otra parte</option>
  <option> (H20) Iridociclitis </option>
  <option> (H21) Otros trastornos del iris y del cuerpo ciliar</option>
  <option> (H22) Trastornos del iris y del cuerpo ciliar en enfermedades clasificadas en otra parte</option>
  <optgroup label="Trastornos del cristalino ">
  <option> (H25) Catarata senil</option>
  <option> (H26) Otras cataratas </option>
  <option> (H27) Otros trastornos del cristalino </option>
   <option>(H28) Catarata y otros trastornos del cristalino en enfermedades clasificadas en otra parte </option>
  <optgroup label="Trastornos de la coroides y retina ">
  <option> (H30) Inflamación coriorretiniana</option>
  <option> (H31) Otros trastornos de la coroides</option>
  <option> (H32) Trastornos coriorretinianos en enfermedades clasificadas en otra parte</option>
  <option> (H33) Desprendimiento y desgarro de la retina</option>
  <option> (H34) Oclusión vascular de la retina </option>
  <option> (H35) Otros trastornos de la retina</option>
  <option> (H36) Trastornos de la retina en enfermedades clasificadas en otra parte</option>
  <optgroup label=" Glaucoma  ">
   <option>(H40) Glaucoma </option>
  <option> (H42) Glaucoma en enfermedades clasificadas en otra parte</option>
  <optgroup label="  Trastornos del cuerpo vitreo y del globo ocular ">
  <option> (H43) Trastornos del cuerpo vitreo </option>
  <option> (H44) Trastornos del globo ocular </option>
  <option> (H45) Trastornos del cuerpo vitreo y del globo ocular en enfermedades clasificadas </option>
  <optgroup label="  Trastornos del nervio óptico y de las vías ópticas ">
  <option> (H46) Neuritis óptica</option>
  <option> (H47) Otros trastornos del nervio óptico [II par] y de las vías ópticas</option>
  <option> (H48) Trastornos del nervio óptico [II par] y de las vías ópticas en enfermedades clasificadas en otra parte</option>
   <optgroup label="   Trastornos de los músculos oculares del movimiento binocular de la acomodación y de la refracción ">
  <option>(H49) Estrabismo paralítico</option>
  <option>(H50) Otros estrabismos </option>
  <option>(H51) Otros trastornos de los movimientos binoculares</option>
  <option>(H52) Trastornos de la acomodación y de la refracción Alteración de la visión y ceguera </option>
  <option>(H53) Alteraciones de la visión</option>
  <option>(H54) Ceguera y disminución de la agudeza visual Otros trastornos del ojo y sus anexos</option>
  <option>(H55) Nistagmo y otros movimientos oculares irregulares</option>
  <option>(H57) Otros trastornos del ojo y sus anexos </option>
  <option>(H58) Otros trastornos del ojo y sus anexos en enfermedades clasificadas en otra parte</option>
  <option>(H59) Trastornos del ojo y sus anexos consecutivos a procedimientos, no clasificados en otra parte</option>
</select>
</div>





</p>
</div>



<div id="formula" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>


<div class="container">
<div class="row "> 
<div class="col-md-3 col-md-offset-0">	
<div class="panel panel-primary" >
 <div class="panel-heading"  align="center" style="background-color: #4d94ff;">
                    OJO DERECHO
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
	


<div class="form-group">
	{!!Form::label('esfera','Esfera')!!}

	{!!Form::text('esfera',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('cilindro','Cilindro')!!}

	{!!Form::text('cilindro',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('eje','Eje')!!}

	{!!Form::text('eje',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('adicion','Adiccion')!!}

	{!!Form::text('adicion',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('prisma_base','Prisma base')!!}

	{!!Form::text('prisma_base',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('grados','Grados')!!}

	{!!Form::text('grados',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('av_con_rx_m_lej','av_con_rx_m_lej')!!}

	{!!Form::text('av_con_rx_m_lej',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

<div class="form-group">
	{!!Form::label('av_con_rx_m_cerca','av_con_rx_m_cerca')!!}

	{!!Form::text('av_con_rx_m_cerca',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


</div>
</div>
</div> 




<div class="col-md-3">
	
<div class="panel panel-primary" >
 <div class="panel-heading"  align="center" style="background-color: #4d94ff;">
                    OJO IZQUIERDO
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">

                	
<div class="form-group">
	{!!Form::label('esferal','Esfera')!!}

	{!!Form::text('esferal',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('cilindrol','Cilindro')!!}

	{!!Form::text('cilindrol',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('ejel','Eje')!!}

	{!!Form::text('ejel',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('adicionl','Adiccion')!!}

	{!!Form::text('adicionl',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('prisma_basel','Prisma base')!!}

	{!!Form::text('prisma_basel',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('gradosl','Grados')!!}

	{!!Form::text('gradosl',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('av_con_rx_m_lejl','av_con_rx_m_lej')!!}

	{!!Form::text('av_con_rx_m_lejl',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>


<div class="form-group">
	{!!Form::label('av_con_rx_m_cercal','av_con_rx_m_cerca')!!}

	{!!Form::text('av_con_rx_m_cercal',null,['class'=>'form-control'])!!}<!-- ,'required'=>'' -->
</div>

</div>
</div>

</div>




<div class="col-md-4">
	
<div class="panel panel-primary" >
 <div class="panel-heading"  align="center" style="background-color: #4d94ff;">
                    GENERAL
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">


<div class="form-group">
{!!Form::label('product_id','Tipo Lentes:')!!}

{!!Form::select('product_id',$person2,null,['id'=>'person2','class'=>'form-control selectpicker','style'=>'width: 100%'])  !!}
</div>




<div class="form-group">
	{!!Form::label('color_ttos','Color y ttos')!!}

	{!!Form::text('color_ttos',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('use_device','Uso dispositivos')!!}

	{!!Form::text('use_device',null,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('control','Control')!!}

	{!!Form::text('control',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('dp','Dp:')!!}

	{!!Form::text('dp',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('validity','Vigencia:')!!}

	{!!Form::text('validity',null,['class'=>'form-control'])!!}
</div>



</div>
</div>

</div>



</div>
</div>







<div class="form-group">
	{!!Form::label('observation','Observacion')!!}

	{!!Form::textArea('observation',null,['class'=>'form-control'])!!}
</div>










	

</p>
</div>

<!-- <div class="form-group">
	{!!Form::label('refractive_id','refractive_id')!!}

	{!!Form::text('refractive_id',null,['class'=>'form-control'])!!}
</div> esta es la foranea de right_eye -->




<script>
$("#person").select2({
 theme: "classic"
})


$("#person1").select2({
 theme: "classic"
})

$("#person3").select2({
tags : true,
/*theme: "classic"*/

})

$("#person4").select2({
tags : true,
/*theme: "classic"*/

})

$("#person2").select2({
 theme: "classic",
 
})
</script>

