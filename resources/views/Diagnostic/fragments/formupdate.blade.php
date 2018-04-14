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




<div id="Paris" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
 <div class="row"  >
  		<div class="panel panel-primary" >
                <div class="panel-heading"  align="center">
                    REFRACCION
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;"style="background-color: #f2f2f2;">

<div class="col-md-3"   >

  	<div class="form-group">
	<label>Examen externo</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->external_examination?>" name="external_examination"/>
</div>


<div class="form-group">
	<label>rx_en_uso_m</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->rx_en_uso_m?>" name="rx_en_uso_m"/>
</div>


<div class="form-group">
	<label>rx_en_uso_lc</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->rx_en_uso_lc?>" name="rx_en_uso_lc"/>
</div>

<div class="form-group">
	<label>av_sin_rx_lej</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->av_sin_rx_lej?>" name="av_sin_rx_lej"/>
</div>
</div>

<div class="col-md-3">


<div class="form-group">
	<label>av_sin_rx_cerca</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->av_sin_rx_cerca?>" name="av_sin_rx_cerca"/>
</div>



<div class="form-group">
	<label>queratometría</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->queratometría?>" name="queratometría"/>
</div>

<div class="form-group">
	{!!Form::label('ph_lejos','ph_lejos')!!}

	{!!Form::text('ph_lejos',$diagnosticrefractive->ph_lejos,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('ph_cerca','ph_cerca')!!}

	{!!Form::text('ph_cerca',$diagnosticrefractive->ph_cerca,['class'=>'form-control'])!!}
</div>
</div>


<div class="col-md-3" style="" >
<div class="form-group">
	<label>refracción</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->refracción?>" name="refracción"/>
</div>

<div class="form-group">
	<label>sub_s_ciclopejia</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->sub_s_ciclopejia?>" name="sub_s_ciclopejia"/>
</div>

<div class="form-group">
	<label>ref_c_ciclopejia</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->ref_c_ciclopejia?>" name="ref_c_ciclopejia"/>
</div>

<div class="form-group">
	<label>sub_c_ciclopejia</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->sub_c_ciclopejia?>" name="sub_c_ciclopejia"/>
</div>
</div>


<div class="col-md-3">
<div class="form-group">
	<label>rx_final</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->rx_final?>" name="rx_final"/>
</div>

<div class="form-group">
	<label>avfl</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->avfl?>" name="avfl"/>
</div>

<div class="form-group">
	<label>ADD</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->add?>" name="add"/>
</div>

<div class="form-group">
	<label>AVFP</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->avfp?>" name="avfp"/>
</div>
</div>


<!-- <div class="col-md-1">
aqui estaban los ph

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

<div class="form-group">
	<label>aca</label>
	<input type="text" class="form-control" value="<?= $diagnosticObservation->aca?>" name="aca"/>
</div>

<div class="form-group">
	<label>cover_test</label>
	<input type="text" class="form-control" value="<?= $diagnosticObservation->cover_test?>" name="cover_test"/>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
	<label>ppc</label>
	<input type="text" class="form-control" value="<?= $diagnosticObservation->ppc?>" name="ppc"/>
</div>


<div class="form-group">
	<label>afc</label>
	<input type="text" class="form-control" value="<?= $diagnosticObservation->afc?>" name="afc"/>
</div>
</div>


<div class="col-md-3">
<div class="form-group">
	<label>ojo_dte</label>
	<input type="text" class="form-control" value="<?= $diagnosticObservation->ojo_dte?>" name="ojo_dte"/>
</div>

</div>

</div>
</div>
</div>











<!-- <h2>previous segmet</h2> -->

<!-- <div class="form-group">
	<label>Motilidad Ocular</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->motilidad_ocular?>" name="motilidad_ocular"/>
</div> -->


<div class="raw">
	<div class="panel panel-primary" >
                <div class="panel-heading"  align="center">
                    SEGMENTO ANTERIOR
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
                	<div class="col-md-2" style="">

<!-- <div class="form-group">
	<label>Segmento Previo</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->previous_segments?>" name="previous_segments"/>
</div> -->

<div class="form-group">
	<label>Parpado</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->parpado?>" name="parpado"/>
</div>


<div class="form-group">
	<label>Vias Lagrimales</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->vías_lagrimales?>" name="vías_lagrimales"/>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
	<label>Sencibilad Contraste</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->sensib_contraste?>" name="sensib_contraste"/>
</div>

<div class="form-group">
	<label>Pupila</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->pupila?>" name="pupila"/>
</div>


<div class="form-group">
	<label>Tipo SCH</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->tipo_sch?>" name="tipo_sch"/>
</div>
</div>


<div class="col-md-3">
<div class="form-group">
	<label>APL</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->apl?>" name="apl"/>
</div>

<div class="form-group">
	<label>Tonometria</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->tonometría?>" name="tonometría"/>
</div>


<div class="form-group">
	<label>l_intraoculares</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->l_intraoculares?>" name="l_intraoculares"/>
</div>
</div>


<div class="col-md-2">
<div class="form-group">
	<label>biomicroscopía</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->biomicroscopía?>" name="biomicroscopía"/>
</div>

<div class="form-group">
	<label>Test Color</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->test_color?>" name="test_color"/>
</div>


<div class="form-group">
	<label>t_estereopsis</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->t_estereopsis?>" name="t_estereopsis"/>
</div>

<div class="form-group">
	<label>resultado</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segment->resultado?>" name="resultado"/>
</div>
</div>
</div>
</div>
</div>

</p> 
</div>


<div id="Tokyo" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
 <div class="row"  >
  		<div class="panel panel-primary"  >
                <div class="panel-heading"  align="center" style="background-color: #4d94ff;">
                    REFRACCION
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
                	<div class="col-md-3">

		<div class="form-group">
	<label>Examen externo</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->external_examinationl?>" name="external_examinationl"/>
</div>

	<div class="form-group">
	<label>rx_en_uso_ml</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->rx_en_uso_ml?>" name="rx_en_uso_ml"/>
</div>

<div class="form-group">
	<label>rx_en_uso_lcl</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->rx_en_uso_lcl?>" name="rx_en_uso_lcl"/>
</div>


<div class="form-group">
	<label>av_sin_rx_lejl</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->av_sin_rx_lejl?>" name="av_sin_rx_lejl"/>
</div>
</div>


<div class="col-md-3">



<div class="form-group">
	<label>av_sin_rx_cerca</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->av_sin_rx_cercal?>" name="av_sin_rx_cercal"/>
</div>






<div class="form-group">
	<label>queratometríal</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->queratometríal?>" name="queratometríal"/>
</div>

<div class="form-group">
	{!!Form::label('ph_lejosl','PH_lejos')!!}

	{!!Form::text('ph_lejosl',$diagnosticRefractive_lefteye->ph_lejosl,['class'=>'form-control'])!!}
</div>
<div class="form-group">
	{!!Form::label('ph_cercal','PH_cerca')!!}

	{!!Form::text('ph_cercal',$diagnosticRefractive_lefteye->ph_cercal,['class'=>'form-control'])!!}
</div>
</div>

<div class="col-md-3">
<div class="form-group">
	<label>refracciónl</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->refracciónl?>" name="refracciónl"/>
</div>

<div class="form-group">
	<label>sub_s_ciclopejial</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->sub_s_ciclopejial?>" name="sub_s_ciclopejial"/>
</div>


<div class="form-group">
	<label>ref_c_ciclopejial</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->ref_c_ciclopejial?>" name="ref_c_ciclopejial"/>
</div>


<div class="form-group">
	<label>sub_c_ciclopejial</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->sub_c_ciclopejial?>" name="sub_c_ciclopejial"/>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
	<label>rx_finall</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->rx_finall?>" name="rx_finall"/>
</div>


<div class="form-group">
	<label>avfll</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->avfll?>" name="avfll"/>
</div>

<div class="form-group">
	<label>ADD</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->addl?>" name="addl"/>
</div>

<div class="form-group">
	<label>AVFP</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->avfpl?>" name="avfpl"/>
</div>
</div>

<!-- <div class="col-md-1">
aqui estaban los ph
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
	<label>ACA</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->acal?>" name="acal"/>
</div>

<div class="form-group">
	<label>COVER TEST</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->cover_testl?>" name="cover_testl"/>
</div>
</div>

<div class="col-md-3">
<div class="form-group">
	<label>PPC</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->ppcl?>" name="ppcl"/>
</div>

<div class="form-group">
	<label>AFC</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->afcl?>" name="afcl"/>
</div>
</div>


<div class="col-md-3">
<div class="form-group">
	<label>OJO DTEL</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->ojo_dtel?>" name="ojo_dtel"/>
</div>
</div>
 </div>
 </div>
</div>







<!-- <h2>previous segmet</h2> -->

<!-- <div class="form-group">
	<label>Motilidad Ocular</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->motilidad_ocularl?>" name="motilidad_ocularl"/>
</div> -->
<div class="row">

	<div class="panel panel-primary" >
                <div class="panel-heading"  align="center" style="background-color: #4d94ff;">
                    SEGMENTO ANTERIOR
                </div>

                <div class="panel-body" style="background-color: #f2f2f2;">
	<div class="col-md-2">

<div class="form-group">
	<label>Segmento Previo</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->previous_segmentsl?>" name="previous_segmentsl"/>
</div>

<div class="form-group">
	<label>Parpado</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->parpadol?>" name="parpadol"/>
</div>
</div>


<div class="col-md-3">
<div class="form-group">
	<label>Vias Lagrimales</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->vías_lagrimalesl?>" name="vías_lagrimalesl"/>
</div>

<div class="form-group">
	<label>Sencibilad Contraste</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->sensib_contrastel?>" name="sensib_contrastel"/>
</div>

<div class="form-group">
	<label>Pupila</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->pupilal?>" name="pupilal"/>
</div>
</div>


<div class="col-md-3">
<div class="form-group">
	<label>Tipo SCH</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->tipo_schl?>" name="tipo_schl"/>
</div>

<div class="form-group">
	<label>APL</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->apll?>" name="apll"/>
</div>

<div class="form-group">
	<label>Tonometria</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->tonometríal?>" name="tonometríal"/>
</div>
</div>



<div class="col-md-2">
<div class="form-group">
	<label>l_intraoculares</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->l_intraocularesl?>" name="l_intraocularesl"/>
</div>

<div class="form-group">
	<label>biomicroscopía</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->biomicroscopíal?>" name="biomicroscopíal"/>
</div>

<div class="form-group">
	<label>Test Color</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->test_colorl?>" name="test_colorl"/>
</div>


<div class="form-group">
	<label>t_estereopsis</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->t_estereopsisl?>" name="t_estereopsisl"/>
</div>

<div class="form-group">
	<label>resultado</label>
	<input type="text" class="form-control" value="<?= $diagnosticPrevious_segmentleft->resultadol?>" name="resultadol"/>
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
<h2>este es de  rear segment</h2>



<div class="form-group">
	<label>conducta</label>
	<input type="text" class="form-control" value="<?= $diagnosticRear_segment->conducta?>" name="conducta"/>
</div>



<!-- <div class="form-group">
	{!!Form::label('principal_diagnostic_id','diagnóstico principal id')!!}

	{!!Form::text('principal_diagnostic_id',null,['class'=>'form-control'])!!}
</div> -->


<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('principal_diagnostic_id','diagnóstico principal id')!!}

{!!Form::select('principal_diagnostic_id',$person1,$diagnosticRear_segment->principal_diagnostic_id,['id'=>'person1','class'=>'form-control selectpicker','name'=>'principal_diagnostic_id','style'=>'width: 100%'])  !!}
<!-- ,'multiple'=>'multiple' -->

<!-- {!!Form::select('size', ['L' => 'Large', 'S' => 'Small'],'S')!!} -->
</div>
</div>
</div>



<div class="form-group">
<label>Diagnóstico Rela</label>
<select class="form-control" multiple="multiple" name="diagnóstico_rela[]" id="person3" style="width: 100%">
	<option value="<?= $diagnosticRear_segment->diagnóstico_rela?>"  selected="selected">{{$diagnosticRear_segment->diagnóstico_rela}}</option>
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
	<label>ultimo_ontrol</label>
	<input type="text" class="form-control" value="<?= $diagnosticRear_segment->ultimo_ontrol?>" name="ultimo_ontrol"/>
</div>

<div class="form-group">
	<label>próximo_control</label>
	<input type="text" class="form-control" value="<?= $diagnosticRear_segment->próximo_control?>" name="próximo_control"/>
</div>


</p> 
</div>



<!-- <div id="observacion" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>



</p> 
</div> -->


<div id="diagnostico" class="tabcontent">
	<span onclick="this.parentElement.style.display='none'" class="topright">x</span>
<h2>de diagnostic</h2>
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
{!!Form::label('patient_income_id','id Ingreso')!!}

{!!Form::select('patient_income_id',$person,$diagnostic->patient_income_id,['id'=>'person','class'=>'form-control selectpicker'])  !!}<!-- ojo en la variable para mostrar es la que tiene el modelo donde esta la foranea ej en este caso diagnostic tiene la foranea de patien income y por eso uso la variable que apunte al campo -->
</div>
</div>
</div>



<h2>este es el de historial clinico</h2>



<div class="form-group">
	{!!Form::label('description','Descripcion')!!}

	{!!Form::textarea('description',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('past_surgical_history','Historia quirurjica pasada')!!}

	{!!Form::text('past_surgical_history',null,['class'=>'form-control'])!!}
</div>




<div class="form-group">
{!!Form::label('antecedents','Antecedentes')!!}
<select class="form-control" multiple="multiple" name="antecedents[]" id="person4" style="width: 100%">
	<option value="<?= $diagnosticMedical_record->antecedents?>"  selected="selected">{{$diagnosticMedical_record->antecedents}}</option>
	
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


	<div class="row">
<div class="col-md-7 col-md-offset-0">
<div class="form-group">
{!!Form::label('product_id','Tipo de Lentes')!!}

{!!Form::select('product_id',$person2,$diagnosticFormula->product_id,['id'=>'person2','class'=>'form-control selectpicker'])  !!}<!-- ojo en la variable para mostrar es la que tiene el modelo donde esta la foranea ej en este caso diagnostic tiene la foranea de patien income y por eso uso la variable que apunte al campo -->
</div>
</div>
</div>

<div class="form-group">
	{!!Form::label('color_ttos','Color y ttos')!!}

	{!!Form::text('color_ttos',$diagnosticFormula->color_ttos,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('use_device','Uso dispositivos')!!}

	{!!Form::text('use_device',$diagnosticFormula->use_device,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('observation','Observacion')!!}

	{!!Form::textArea('observation',$diagnosticFormula->observation,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('control','Control')!!}

	{!!Form::text('control',$diagnosticFormula->control,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('dp','Dp:')!!}

	{!!Form::text('dp',$diagnosticFormula->dp,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('validity','Vigencia:')!!}

	{!!Form::text('validity',$diagnosticFormula->validity,['class'=>'form-control'])!!}
</div>


<h2>hojo derecho</h2>

<div class="form-group">
	{!!Form::label('esfera','Esfera')!!}

	{!!Form::text('esfera',$diagnosticRight_eye->esfera,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('cilindro','Cilindro')!!}

	{!!Form::text('cilindro',$diagnosticRight_eye->cilindro,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('eje','Eje')!!}

	{!!Form::text('eje',$diagnosticRight_eye->eje,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('adicion','Adiccion')!!}

	{!!Form::text('adicion',$diagnosticRight_eye->adicion,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('prisma_base','Prisma base')!!}

	{!!Form::text('prisma_base',$diagnosticRight_eye->prisma_base,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('grados','Grados')!!}

	{!!Form::text('grados',$diagnosticRight_eye->grados,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	<label>av_con_rx_m_lej</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->av_con_rx_m_lej?>" name="av_con_rx_m_lej"/>
</div>
<div class="form-group">
	<label>av_con_rx_m_cerca</label>
	<input type="text" class="form-control" value="<?= $diagnosticRight_eye->av_con_rx_m_cerca?>" name="av_con_rx_m_cerca"/>
</div>

<h2>Ojo izquierdo</h2>

<div class="form-group">
	{!!Form::label('esferal','Esfera')!!}

	{!!Form::text('esferal',$diagnosticLeft_eye->esferal,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('cilindrol','Cilindro')!!}

	{!!Form::text('cilindrol',$diagnosticLeft_eye->cilindrol,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('ejel','Eje')!!}

	{!!Form::text('ejel',$diagnosticLeft_eye->ejel,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('adicionl','Adiccion')!!}

	{!!Form::text('adicionl',$diagnosticLeft_eye->adicionl,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('prisma_basel','Prisma base')!!}

	{!!Form::text('prisma_basel',$diagnosticLeft_eye->prisma_basel,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	{!!Form::label('gradosl','Grados')!!}

	{!!Form::text('gradosl',$diagnosticLeft_eye->gradosl,['class'=>'form-control'])!!}
</div>

<div class="form-group">
	<label>av_con_rx_m_lejl</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->av_con_rx_m_lejl?>" name="av_con_rx_m_lejl"/>
</div>
<div class="form-group">
	<label>av_con_rx_m_cerca</label>
	<input type="text" class="form-control" value="<?= $diagnosticLeft_eye->av_con_rx_m_cercal?>" name="av_con_rx_m_cercal"/>
</div>

<div class="form-group">
	
	{!!Form::submit('ENVIAR',['class'=>'btn btn-primary'])!!}
</div>
	</p>
</div>




<!-- <div class="form-group">
	{!!Form::label('refractive_id','refractive_id')!!}

	{!!Form::text('refractive_id',null,['class'=>'form-control'])!!}
</div> esta es la foranea de right_eye -->




<script>
$("#person").select2({

})


$("#person1").select2({

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

})
</script>

