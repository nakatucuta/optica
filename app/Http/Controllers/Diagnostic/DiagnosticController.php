<?php

namespace App\Http\Controllers\Diagnostic;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\diagnostic\Diagnostic;
use App\Models\left_eye\Left_eye;
use App\Models\observation\Observation;
use App\Models\previous_segment\Previous_segment;
use App\Models\rear_segment\Rear_segment;
use App\Models\refractive\Refractive;
use App\Models\right_eye\Right_eye;
use App\Models\medical_record\Medical_record;
use App\Models\principal_diagnostic\Principal_diagnostic;
use App\Models\affiliation\Affiliation;
use App\Models\patient_income\Patient_income;
use App\Models\refractive_lefteye\Refractive_lefteye;
use App\Http\Requests\Diagnostic\DiagnosticCreateRequest;
use App\Http\Requests\Diagnostic\DiagnosticUpdateRequest;
use App\Models\previous_segmentsleft\Previous_segmentsleft;
use App\Models\formula\Formula;
class DiagnosticController extends Controller
{

 public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_hitcl', ['only' =>'create']);
        $this->middleware('edit_hitcl', ['only' =>'edit']);
        $this->middleware('elim_hitcl', ['only' =>'show']);
        
       
        
       

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {/*\DB::table('affiliations')->*/
         $categorias= Affiliation::select('diagnostics.id','natural_people.identification','natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname','diagnostics.created_at as ojo')
             ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')

             ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
             ->join('patient_incomes','appointment_calendars.id','=','patient_incomes.appointment_calendar_id')
             ->join('diagnostics','patient_incomes.id','=','diagnostics.patient_income_id')
          
            ->orderBy('id','desc')
            ->paginate();

            return view('Diagnostic.index',["categorias"=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $query=trim($request->get('searchText'));
        $natural_consulta = \DB::table('affiliations')
            ->select( \DB::raw('CONCAT(natural_people.identification,", ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname) AS natural_consulta '),'patient_incomes.id')
            ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')

             ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
             ->join('patient_incomes','appointment_calendars.id','=','patient_incomes.appointment_calendar_id')->whereNotIn('patient_incomes.id', function($q){
    $q->select('patient_income_id')->from('diagnostics');
        })
             
            
            ;

            $afiliadosSql = $natural_consulta->toSql();
         /*   dd( $afiliadosSql );*/
            $natural_people_consult = $natural_consulta->get()->pluck('natural_consulta','id')->prepend('selecciona', 0);


            $person1 = \DB::table('principal_diagnostics')
            ->select( \DB::raw('CONCAT(principal_diagnostics.code,", ",principal_diagnostics.name) AS person1 '),'principal_diagnostics.id');

            $afiliadosSql = $person1->toSql();
          /*  dd( $afiliadosSql );*/
            $principal = $person1->get()->pluck('person1','id')->prepend('selecciona', 0);



            $person2 = \DB::table('products')
            ->select( \DB::raw('CONCAT(products.name," , $",products.price) AS person2 '),'products.id');

           
            $producto = $person2->get()->pluck('person2','id')->prepend('selecciona', 0);




           /*para el buscar*/$categorias= Affiliation::select('diagnostics.id','natural_people.identification','natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname','diagnostics.created_at as ojo')->where('natural_people.identification','LIKE','%'.$query.'%')
             ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')

             ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
             ->join('patient_incomes','appointment_calendars.id','=','patient_incomes.appointment_calendar_id')
             ->join('diagnostics','patient_incomes.id','=','diagnostics.patient_income_id')
          
            ->orderBy('id','desc')
            ->paginate(2);

               return view('Diagnostic.create',["person"=>$natural_people_consult,"person1"=>$principal,"searchText"=>$query,"categorias"=>$categorias,"person2"=>$producto]);
        
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(request $request)
    {   
        $diagnosticFormula = new Formula;
         $diagnosticPrevious_segment = new Previous_segment;
         $diagnosticPrevious_segmentleft = new Previous_segmentsleft;
        $diagnosticRefractive_lefteye = new Refractive_lefteye;
        $diagnosticrefractive = new Refractive;
        $diagnostic = new Diagnostic;
        $diagnosticLeft_eye = new Left_eye;
        $diagnosticObservation = new Observation;
       
        $diagnosticRear_segment = new Rear_segment;
        $diagnosticRight_eye = new Right_eye;
        $diagnosticMedical_record = new Medical_record;
       

         $diagnosticrefractive->ph_lejos = $request->ph_lejos;
         $diagnosticrefractive->ph_cerca = $request->ph_cerca;
        

        $diagnosticrefractive->save();

        $diagnosticRefractive_lefteye->ph_lejosl = $request->ph_lejosl;
        $diagnosticRefractive_lefteye->ph_cercal = $request->ph_cercal;

        $diagnosticRefractive_lefteye->save();



            /*$diagnosticPrevious_segmentleft->motilidad_ocularl = $request->motilidad_ocularl;*/
         $diagnosticPrevious_segmentleft->previous_segmentsl = $request->previous_segmentsl;
          $diagnosticPrevious_segmentleft->parpadol = $request->parpadol;
        $diagnosticPrevious_segmentleft->vías_lagrimalesl = $request->vías_lagrimalesl;
        $diagnosticPrevious_segmentleft->sensib_contrastel = $request->sensib_contrastel;
         $diagnosticPrevious_segmentleft->pupilal = $request->pupilal;
          $diagnosticPrevious_segmentleft->tipo_schl = $request->tipo_schl;
        $diagnosticPrevious_segmentleft->apll = $request->apll;
        $diagnosticPrevious_segmentleft->tonometríal = $request->tonometríal;
         $diagnosticPrevious_segmentleft->l_intraocularesl = $request->l_intraocularesl;
          $diagnosticPrevious_segmentleft->biomicroscopíal = $request->biomicroscopíal;
        $diagnosticPrevious_segmentleft->test_colorl = $request->test_colorl;
        $diagnosticPrevious_segmentleft->t_estereopsisl = $request->t_estereopsisl;
        $diagnosticPrevious_segmentleft->resultadol = $request->resultadol;
        $diagnosticPrevious_segmentleft->save();


          /*$diagnosticPrevious_segment->motilidad_ocular = $request->motilidad_ocular;*/
         $diagnosticPrevious_segment->previous_segments = $request->previous_segments;
          $diagnosticPrevious_segment->parpado = $request->parpado;
        $diagnosticPrevious_segment->vías_lagrimales = $request->vías_lagrimales;
        $diagnosticPrevious_segment->sensib_contraste = $request->sensib_contraste;
         $diagnosticPrevious_segment->pupila = $request->pupila;
          $diagnosticPrevious_segment->tipo_sch = $request->tipo_sch;
        $diagnosticPrevious_segment->apl = $request->apl;
        $diagnosticPrevious_segment->tonometría = $request->tonometría;
         $diagnosticPrevious_segment->l_intraoculares = $request->l_intraoculares;
          $diagnosticPrevious_segment->biomicroscopía = $request->biomicroscopía;
        $diagnosticPrevious_segment->test_color = $request->test_color;
        $diagnosticPrevious_segment->t_estereopsis = $request->t_estereopsis;
        $diagnosticPrevious_segment->resultado = $request->resultado;
        $diagnosticPrevious_segment->save();

        $diagnosticObservation->aca = $request->aca;
         $diagnosticObservation->cover_test = $request->cover_test;
          $diagnosticObservation->ppc = $request->ppc;
        $diagnosticObservation->afc = $request->afc;
        $diagnosticObservation->ojo_dte = $request->ojo_dte;
         $diagnosticObservation->save();


         $diagnosticRight_eye->external_examination = $request->external_examination;
         $diagnosticRight_eye->rx_en_uso_m = $request->rx_en_uso_m;
          $diagnosticRight_eye->rx_en_uso_lc = $request->rx_en_uso_lc;
        $diagnosticRight_eye->av_sin_rx_lej = $request->av_sin_rx_lej;
        $diagnosticRight_eye->av_con_rx_m_lej = $request->av_con_rx_m_lej;
         $diagnosticRight_eye->av_sin_rx_cerca = $request->av_sin_rx_cerca;
         $diagnosticRight_eye->av_con_rx_m_cerca = $request->av_con_rx_m_cerca;
          $diagnosticRight_eye->queratometría = $request->queratometría;
        $diagnosticRight_eye->refracción = $request->refracción;
        $diagnosticRight_eye->sub_s_ciclopejia = $request->sub_s_ciclopejia;
         $diagnosticRight_eye->ref_c_ciclopejia = $request->ref_c_ciclopejia;
          $diagnosticRight_eye->sub_c_ciclopejia = $request->sub_c_ciclopejia;
        $diagnosticRight_eye->rx_final = $request->rx_final;
        $diagnosticRight_eye->avfl = $request->avfl;
        $diagnosticRight_eye->add = $request->add;
        $diagnosticRight_eye->avfp = $request->avfp;

        $diagnosticRight_eye->esfera = $request->esfera;
        $diagnosticRight_eye->cilindro = $request->cilindro;
        $diagnosticRight_eye->eje = $request->eje;
        $diagnosticRight_eye->adicion = $request->adicion;
        $diagnosticRight_eye->prisma_base = $request->prisma_base;
        $diagnosticRight_eye->grados = $request->grados;

         $diagnosticRight_eye->refractive_id = $diagnosticrefractive->id ;
         $diagnosticRight_eye->previus_segment_id = $diagnosticPrevious_segment->id;
        $diagnosticRight_eye->observation_id = $diagnosticObservation->id ;
            $diagnosticRight_eye->save();


             $diagnosticLeft_eye->external_examinationl = $request->external_examinationl;
         $diagnosticLeft_eye->rx_en_uso_ml = $request->rx_en_uso_ml;
          $diagnosticLeft_eye->rx_en_uso_lcl = $request->rx_en_uso_lcl;
        $diagnosticLeft_eye->av_sin_rx_lejl = $request->av_sin_rx_lejl;
        $diagnosticLeft_eye->av_con_rx_m_lejl = $request->av_con_rx_m_lejl;
        $diagnosticLeft_eye->av_sin_rx_cercal = $request->av_sin_rx_cerca;
         $diagnosticLeft_eye->av_con_rx_m_cercal = $request->av_con_rx_m_cerca;
          $diagnosticLeft_eye->queratometríal = $request->queratometríal;
        $diagnosticLeft_eye->refracciónl = $request->refracciónl;
        $diagnosticLeft_eye->sub_s_ciclopejial = $request->sub_s_ciclopejial;
         $diagnosticLeft_eye->ref_c_ciclopejial = $request->ref_c_ciclopejial;
          $diagnosticLeft_eye->sub_c_ciclopejial = $request->sub_c_ciclopejial;
        $diagnosticLeft_eye->rx_finall = $request->rx_finall;
        $diagnosticLeft_eye->avfll = $request->avfll;
        $diagnosticLeft_eye->addl = $request->addl;
        $diagnosticLeft_eye->avfpl = $request->avfpl;

        $diagnosticLeft_eye->esferal = $request->esferal;
        $diagnosticLeft_eye->cilindrol = $request->cilindrol;
        $diagnosticLeft_eye->ejel = $request->ejel;
        $diagnosticLeft_eye->adicionl = $request->adicionl;
        $diagnosticLeft_eye->prisma_basel = $request->prisma_basel;
        $diagnosticLeft_eye->gradosl = $request->gradosl;

        $diagnosticLeft_eye->acal = $request->acal;
        $diagnosticLeft_eye->cover_testl = $request->cover_testl;
        $diagnosticLeft_eye->ppcl = $request->ppcl;
        $diagnosticLeft_eye->afcl = $request->afcl;
        $diagnosticLeft_eye->ojo_dtel = $request->ojo_dtel;
        $diagnosticLeft_eye->refractive_id = $diagnosticRefractive_lefteye->id ;
        $diagnosticLeft_eye->previus_segmentleft_id = $diagnosticPrevious_segmentleft->id;
            $diagnosticLeft_eye->save();



             


        


        
         $diagnosticRear_segment->conducta = $request->conducta;
          $diagnosticRear_segment->principal_diagnostic_id = $request->principal_diagnostic_id;
        $diagnosticRear_segment->diagnóstico_rela = implode(', ', $request->diagnóstico_rela);
        
         $diagnosticRear_segment->ultimo_ontrol = $request->ultimo_ontrol;
          $diagnosticRear_segment->próximo_control = $request->próximo_control;
                 $diagnosticRear_segment->save();


                 $diagnosticFormula->product_id = $request->product_id;
                 $diagnosticFormula->color_ttos = $request->color_ttos;
                 $diagnosticFormula->use_device = $request->use_device;
                 $diagnosticFormula->observation = $request->observation;
                 $diagnosticFormula->control = $request->control;
                 $diagnosticFormula->dp = $request->dp;
                 $diagnosticFormula->validity = $request->validity;
                 $diagnosticFormula->save();

                 /*$diagnostic->code = $request->code;*/
                 $diagnostic->patient_income_id = $request->patient_income_id;
                 $diagnostic->left_eye_id = $diagnosticLeft_eye->id ;
                 $diagnostic->right_eye_id = $diagnosticRight_eye->id ;
                 
                 $diagnostic->Rear_segment_id = $diagnosticRear_segment->id;
                 $diagnostic->Observation_id = $diagnosticObservation->id;
                 $diagnostic->formula_id = $diagnosticFormula->id;
                    $diagnostic->save();


                    
                 $diagnosticMedical_record->description = $request->description;
                  $diagnosticMedical_record->past_surgical_history = $request->past_surgical_history;
                  $diagnosticMedical_record->antecedents = implode(', ', $request->antecedents); 
                    
                  $diagnosticMedical_record->diagnostic_id = $diagnostic->id;

               
                    $diagnosticMedical_record->save();

                    
                    return redirect()->route('diagnostic.index') ->with('info',' El Historial Clinico Fue Almacenado Exitosamente..!');





    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $diagnosticshow = Diagnostic::find($id);
        $categorias=\DB::table('affiliations')->select('diagnostics.id','natural_people.identification','natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname')
             ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')

             ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
             ->join('patient_incomes','appointment_calendars.id','=','patient_incomes.appointment_calendar_id')
             ->join('diagnostics','patient_incomes.id','=','diagnostics.patient_income_id')
              ->where('diagnostics.id','=',$id)
          
            ->orderBy('id','desc')
            ->paginate()->first();

            return view('Diagnostic.show',["categorias"=>$categorias,"diagnosticshow"=>$diagnosticshow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $diagnosticFormula = Formula::find($id);
        $diagnosticPrevious_segmentleft =  Previous_segmentsleft::find($id);
        $diagnosticRefractive_lefteye =  Refractive_lefteye::find($id);
        $diagnosticrefractive =  Refractive::find($id);
        $diagnostic = Diagnostic::find($id);
        $diagnosticLeft_eye = Left_eye::find($id);
        $diagnosticObservation =  Observation::find($id);
        $diagnosticPrevious_segment = Previous_segment::find($id);
        $diagnosticRear_segment = Rear_segment::find($id);
        $diagnosticRight_eye = Right_eye::find($id);
        $diagnosticMedical_record = Medical_record::find($id);
        

         $natural_consulta = \DB::table('affiliations')
            ->select( \DB::raw('CONCAT(natural_people.identification,", ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname) AS natural_consulta '),'patient_incomes.id')
            ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')

             ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
             ->join('patient_incomes','appointment_calendars.id','=','patient_incomes.appointment_calendar_id')
             
            
            ;

            $afiliadosSql = $natural_consulta->toSql();
          /*  dd( $afiliadosSql );*/
            $natural_people_consult = $natural_consulta->get()->pluck('natural_consulta','id')->prepend('selecciona', 0);


            $person1 = \DB::table('principal_diagnostics')
            ->select( \DB::raw('CONCAT(principal_diagnostics.code,", ",principal_diagnostics.name) AS person1 '),'principal_diagnostics.id');

            $afiliadosSql = $person1->toSql();
          /*  dd( $afiliadosSql );*/
            $principal = $person1->get()->pluck('person1','id')->prepend('selecciona', 0);

           $person2 = \DB::table('products')
            ->select( \DB::raw('CONCAT(products.name," , $",products.price) AS person2 '),'products.id');

           
            $producto = $person2->get()->pluck('person2','id')->prepend('selecciona', 0);

               return view('Diagnostic.edit',["person"=>$natural_people_consult,"person1"=>$principal,"diagnostic"=>$diagnostic,"diagnosticrefractive"=>$diagnosticrefractive,"diagnosticLeft_eye"=>$diagnosticLeft_eye,"diagnosticObservation"=>$diagnosticObservation,"diagnosticPrevious_segment"=>$diagnosticPrevious_segment,"diagnosticRear_segment"=>$diagnosticRear_segment,"diagnosticRight_eye"=>$diagnosticRight_eye,"diagnosticMedical_record"=>$diagnosticMedical_record,"diagnosticRefractive_lefteye"=>$diagnosticRefractive_lefteye,"diagnosticPrevious_segmentleft"=>$diagnosticPrevious_segmentleft,"diagnosticFormula"=>$diagnosticFormula,"person2"=>$producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(request $request, $id)
    {   
        $diagnosticFormula = Formula::find($id);
        $diagnosticPrevious_segmentleft =  Previous_segmentsleft::find($id);
        $diagnosticRefractive_lefteye =  Refractive_lefteye::find($id);
        $diagnosticrefractive =  Refractive::find($id);
        $diagnostic = Diagnostic::find($id);
        $diagnosticLeft_eye = Left_eye::find($id);
        $diagnosticObservation =  Observation::find($id);
        $diagnosticPrevious_segment = Previous_segment::find($id);
        $diagnosticRear_segment = Rear_segment::find($id);
        $diagnosticRight_eye = Right_eye::find($id);
        $diagnosticMedical_record = Medical_record::find($id);
        
         $diagnosticrefractive->ph_lejos = $request->ph_lejos;
         $diagnosticrefractive->ph_cerca = $request->ph_cerca;

        $diagnosticrefractive->save();


        $diagnosticRefractive_lefteye->ph_lejosl = $request->ph_lejosl;
        $diagnosticRefractive_lefteye->ph_cercal = $request->ph_cercal;
        

        $diagnosticRefractive_lefteye->save();



         /*$diagnosticPrevious_segmentleft->motilidad_ocularl = $request->motilidad_ocularl;*/
         $diagnosticPrevious_segmentleft->previous_segmentsl = $request->previous_segmentsl;
          $diagnosticPrevious_segmentleft->parpadol = $request->parpadol;
        $diagnosticPrevious_segmentleft->vías_lagrimalesl = $request->vías_lagrimalesl;
        $diagnosticPrevious_segmentleft->sensib_contrastel = $request->sensib_contrastel;
         $diagnosticPrevious_segmentleft->pupilal = $request->pupilal;
          $diagnosticPrevious_segmentleft->tipo_schl = $request->tipo_schl;
        $diagnosticPrevious_segmentleft->apll = $request->apll;
        $diagnosticPrevious_segmentleft->tonometríal = $request->tonometríal;
         $diagnosticPrevious_segmentleft->l_intraocularesl = $request->l_intraocularesl;
          $diagnosticPrevious_segmentleft->biomicroscopíal = $request->biomicroscopíal;
        $diagnosticPrevious_segmentleft->test_colorl = $request->test_colorl;
        $diagnosticPrevious_segmentleft->t_estereopsisl = $request->t_estereopsisl;
        $diagnosticPrevious_segmentleft->resultadol = $request->resultadol;
        $diagnosticPrevious_segmentleft->save();




        // $diagnosticPrevious_segment->motilidad_ocular = $request->motilidad_ocular;
         $diagnosticPrevious_segment->previous_segments = $request->previous_segments;
          $diagnosticPrevious_segment->parpado = $request->parpado;
        $diagnosticPrevious_segment->vías_lagrimales = $request->vías_lagrimales;
        $diagnosticPrevious_segment->sensib_contraste = $request->sensib_contraste;
         $diagnosticPrevious_segment->pupila = $request->pupila;
          $diagnosticPrevious_segment->tipo_sch = $request->tipo_sch;
        $diagnosticPrevious_segment->apl = $request->apl;
        $diagnosticPrevious_segment->tonometría = $request->tonometría;
         $diagnosticPrevious_segment->l_intraoculares = $request->l_intraoculares;
          $diagnosticPrevious_segment->biomicroscopía = $request->biomicroscopía;
        $diagnosticPrevious_segment->test_color = $request->test_color;
        $diagnosticPrevious_segment->t_estereopsis = $request->t_estereopsis;
        $diagnosticPrevious_segment->resultado = $request->resultado;
        $diagnosticPrevious_segment->save();

         $diagnosticObservation->aca = $request->aca;
         $diagnosticObservation->cover_test = $request->cover_test;
          $diagnosticObservation->ppc = $request->ppc;
        $diagnosticObservation->afc = $request->afc;
        $diagnosticObservation->ojo_dte = $request->ojo_dte;
         $diagnosticObservation->save();


         $diagnosticRight_eye->external_examination = $request->external_examination;
         $diagnosticRight_eye->rx_en_uso_m = $request->rx_en_uso_m;
          $diagnosticRight_eye->rx_en_uso_lc = $request->rx_en_uso_lc;
        $diagnosticRight_eye->av_sin_rx_lej = $request->av_sin_rx_lej;
        $diagnosticRight_eye->av_con_rx_m_lej = $request->av_con_rx_m_lej;
         $diagnosticRight_eye->av_sin_rx_cerca = $request->av_sin_rx_cerca;
         $diagnosticRight_eye->av_con_rx_m_cerca = $request->av_con_rx_m_cerca;
          $diagnosticRight_eye->queratometría = $request->queratometría;
        $diagnosticRight_eye->refracción = $request->refracción;
        $diagnosticRight_eye->sub_s_ciclopejia = $request->sub_s_ciclopejia;
         $diagnosticRight_eye->ref_c_ciclopejia = $request->ref_c_ciclopejia;
          $diagnosticRight_eye->sub_c_ciclopejia = $request->sub_c_ciclopejia;
        $diagnosticRight_eye->rx_final = $request->rx_final;
        $diagnosticRight_eye->avfl = $request->avfl;
         $diagnosticRight_eye->add = $request->add;
        $diagnosticRight_eye->avfp = $request->avfp;

        $diagnosticRight_eye->esfera = $request->esfera;
        $diagnosticRight_eye->cilindro = $request->cilindro;
        $diagnosticRight_eye->eje = $request->eje;
        $diagnosticRight_eye->adicion = $request->adicion;
        $diagnosticRight_eye->prisma_base = $request->prisma_base;
        $diagnosticRight_eye->grados = $request->grados;


        $diagnosticRight_eye->previus_segment_id = $diagnosticPrevious_segment->id;
         $diagnosticRight_eye->refractive_id = $diagnosticrefractive->id ;
          $diagnosticRight_eye->observation_id = $diagnosticObservation->id ;
            $diagnosticRight_eye->save();


             $diagnosticLeft_eye->external_examinationl = $request->external_examinationl;
         $diagnosticLeft_eye->rx_en_uso_ml = $request->rx_en_uso_ml;
          $diagnosticLeft_eye->rx_en_uso_lcl = $request->rx_en_uso_lcl;
        $diagnosticLeft_eye->av_sin_rx_lejl = $request->av_sin_rx_lejl;
        $diagnosticLeft_eye->av_con_rx_m_lejl = $request->av_con_rx_m_lejl;
         $diagnosticLeft_eye->av_sin_rx_cercal = $request->av_sin_rx_cercal;
         $diagnosticLeft_eye->av_con_rx_m_cercal = $request->av_con_rx_m_cercal;
          $diagnosticLeft_eye->queratometríal = $request->queratometríal;
        $diagnosticLeft_eye->refracciónl = $request->refracciónl;
        $diagnosticLeft_eye->sub_s_ciclopejial = $request->sub_s_ciclopejial;
         $diagnosticLeft_eye->ref_c_ciclopejial = $request->ref_c_ciclopejial;
          $diagnosticLeft_eye->sub_c_ciclopejial = $request->sub_c_ciclopejial;
        $diagnosticLeft_eye->rx_finall = $request->rx_finall;
        $diagnosticLeft_eye->avfll = $request->avfll;
         $diagnosticLeft_eye->addl = $request->addl;
        $diagnosticLeft_eye->avfpl = $request->avfpl;

         $diagnosticLeft_eye->esferal = $request->esferal;
        $diagnosticLeft_eye->cilindrol = $request->cilindrol;
        $diagnosticLeft_eye->ejel = $request->ejel;
        $diagnosticLeft_eye->adicionl = $request->adicionl;
        $diagnosticLeft_eye->prisma_basel = $request->prisma_basel;
        $diagnosticLeft_eye->gradosl = $request->gradosl;
        
        $diagnosticLeft_eye->acal = $request->acal;
        $diagnosticLeft_eye->cover_testl = $request->cover_testl;
        $diagnosticLeft_eye->ppcl = $request->ppcl;
        $diagnosticLeft_eye->afcl = $request->afcl;
        $diagnosticLeft_eye->ojo_dtel = $request->ojo_dtel;
        $diagnosticLeft_eye->refractive_id = $diagnosticRefractive_lefteye->id ;
         $diagnosticLeft_eye->previus_segmentleft_id = $diagnosticPrevious_segmentleft->id;
            $diagnosticLeft_eye->save();



            


          


        
         $diagnosticRear_segment->conducta = $request->conducta;
          $diagnosticRear_segment->principal_diagnostic_id = $request->principal_diagnostic_id;
        $diagnosticRear_segment->diagnóstico_rela = implode(', ', $request->diagnóstico_rela);
        
         $diagnosticRear_segment->ultimo_ontrol = $request->ultimo_ontrol;
          $diagnosticRear_segment->próximo_control = $request->próximo_control;
                 $diagnosticRear_segment->save();


                 $diagnosticFormula->product_id = $request->product_id;
                 $diagnosticFormula->color_ttos = $request->color_ttos;
                 $diagnosticFormula->use_device = $request->use_device;
                 $diagnosticFormula->observation = $request->observation;
                 $diagnosticFormula->control = $request->control;
                 $diagnosticFormula->dp = $request->dp;
                 $diagnosticFormula->validity = $request->validity;
                 $diagnosticFormula->save();





                 /*$diagnostic->code = $request->code;*/
                 $diagnostic->patient_income_id = $request->patient_income_id;
                 $diagnostic->left_eye_id = $diagnosticLeft_eye->id ;
                 $diagnostic->right_eye_id = $diagnosticRight_eye->id ;
                 
                 $diagnostic->Rear_segment_id = $diagnosticRear_segment->id;
                 $diagnostic->Observation_id = $diagnosticObservation->id;
                 $diagnostic->formula_id = $diagnosticFormula->id;
                    $diagnostic->save();


                    
                 $diagnosticMedical_record->description = $request->description;
                  $diagnosticMedical_record->past_surgical_history = $request->past_surgical_history;
                  $diagnosticMedical_record->antecedents = implode(', ', $request->antecedents); 
                    
                  $diagnosticMedical_record->diagnostic_id = $diagnostic->id;

               
                    $diagnosticMedical_record->save();
                    return redirect()->route('diagnostic.index')->with('info',' El Historial Clinico Fue Modificado Exitosamente..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $diagnosticrefractive =  Refractive::find($id);
        $diagnostic = Diagnostic::find($id);
        $diagnosticLeft_eye = Left_eye::find($id);
        $diagnosticObservation =  Observation::find($id);
        $diagnosticPrevious_segment = Previous_segment::find($id);
        $diagnosticRear_segment = Rear_segment::find($id);
        $diagnosticRight_eye = Right_eye::find($id);
        $diagnosticMedical_record = Medical_record::find($id);

       
        
        $diagnosticrefractive->delete();
        
        $diagnosticLeft_eye->delete();
        $diagnosticObservation->delete();
        $diagnosticPrevious_segment->delete();
        $diagnosticRear_segment->delete();
        $diagnosticRight_eye->delete();
        $diagnostic->delete();
        $diagnosticMedical_record->delete();
         return redirect()->route('diagnostic.index')
                ->with('info',' El Historial Clinico Fue Eliminado Exitosamente..!');
    }


    public function diagnosticPDF ($id){

          $diagnostic = Diagnostic::find($id);
           /*$affiliation = Affiliation::all(); los muestra todos*/
          $categorias=\DB::table('patient_incomes')->select('diagnostics.id','natural_people.identification','natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname','genders.name_gender','entity_types.name_type','previous_segmentslefts.motilidad_ocularl','previous_segmentslefts.parpadol','previous_segmentslefts.vías_lagrimalesl','previous_segmentslefts.sensib_contrastel','previous_segmentslefts.pupilal','previous_segmentslefts.tipo_schl','previous_segmentslefts.apll','previous_segmentslefts.tonometríal','previous_segmentslefts.l_intraocularesl','previous_segmentslefts.biomicroscopíal','previous_segmentslefts.test_colorl','previous_segmentslefts.t_estereopsisl','previous_segmentslefts.resultadol','rear_segments.conducta','principal_diagnostics.name as nameprincipaldiagnostic','rear_segments.diagnóstico_rela','rear_segments.ultimo_ontrol','rear_segments.próximo_control','observations.aca','observations.cover_test','observations.ppc','observations.afc','observations.ojo_dte','medical_records.antecedents')

          /*relaciones*/
             ->join('diagnostics','patient_incomes.id','=','diagnostics.patient_income_id')
             ->join('left_eyes','diagnostics.left_eye_id','=','left_eyes.id')
             ->join('right_eyes','diagnostics.right_eye_id','=','right_eyes.id')
             ->join('rear_segments','diagnostics.Rear_segment_id','=','rear_segments.id')
             
              ->join('observations','diagnostics.Observation_id','=','observations.id')
              ->join('refractives','right_eyes.refractive_id','=','refractives.id')
              ->join('principal_diagnostics','rear_segments.principal_diagnostic_id','=','principal_diagnostics.id')
              ->join('appointment_calendars','patient_incomes.appointment_calendar_id','=','appointment_calendars.id')
              ->join('affiliations','appointment_calendars.affiliation_id','=','affiliations.id')
              ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id')
              ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')
              ->join('refractive_lefteyes','left_eyes.refractive_id','=','refractive_lefteyes.id')
               ->join('genders','natural_people.genders_id','=','genders.id')
                ->join('entity_types','legal_entities.entity_types_id','=','entity_types.id')
                ->join('previous_segmentslefts','left_eyes.previus_segmentleft_id','=','previous_segmentslefts.id')
                ->join('medical_records','diagnostics.id','=','medical_records.diagnostic_id')
                /*aqui terminan las relaciones*/

             ->where('diagnostics.id','=',$id)
            
            ->first();
            
    $pdf = \App::make('dompdf.wrapper');
    $pdf = \PDF::loadView('Diagnostic.reports.diagnosticPDF',['diagnostic'=>$diagnostic,'categorias'=>$categorias]);
    return $pdf->stream('Entradas.pdf');


    }




    public function FormulaPDF($id){

         $diagnostic = Diagnostic::find($id);
           /*$affiliation = Affiliation::all(); los muestra todos*/
          $categorias=\DB::table('patient_incomes')->select('diagnostics.id','natural_people.identification','natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname','genders.name_gender','entity_types.name_type','previous_segmentslefts.motilidad_ocularl','previous_segmentslefts.parpadol','previous_segmentslefts.vías_lagrimalesl','previous_segmentslefts.sensib_contrastel','previous_segmentslefts.pupilal','previous_segmentslefts.tipo_schl','previous_segmentslefts.apll','previous_segmentslefts.tonometríal','previous_segmentslefts.l_intraocularesl','previous_segmentslefts.biomicroscopíal','previous_segmentslefts.test_colorl','previous_segmentslefts.t_estereopsisl','previous_segmentslefts.resultadol','rear_segments.conducta','principal_diagnostics.name as nameprincipaldiagnostic','rear_segments.diagnóstico_rela','rear_segments.ultimo_ontrol','rear_segments.próximo_control','observations.aca','observations.cover_test','observations.ppc','observations.afc','observations.ojo_dte','medical_records.antecedents')

          /*relaciones*/
             ->join('diagnostics','patient_incomes.id','=','diagnostics.patient_income_id')
             ->join('left_eyes','diagnostics.left_eye_id','=','left_eyes.id')
             ->join('right_eyes','diagnostics.right_eye_id','=','right_eyes.id')
             ->join('rear_segments','diagnostics.Rear_segment_id','=','rear_segments.id')
             
              ->join('observations','diagnostics.Observation_id','=','observations.id')
              ->join('refractives','right_eyes.refractive_id','=','refractives.id')
              ->join('principal_diagnostics','rear_segments.principal_diagnostic_id','=','principal_diagnostics.id')
              ->join('appointment_calendars','patient_incomes.appointment_calendar_id','=','appointment_calendars.id')
              ->join('affiliations','appointment_calendars.affiliation_id','=','affiliations.id')
              ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id')
              ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')
              ->join('refractive_lefteyes','left_eyes.refractive_id','=','refractive_lefteyes.id')
               ->join('genders','natural_people.genders_id','=','genders.id')
                ->join('entity_types','legal_entities.entity_types_id','=','entity_types.id')
                ->join('previous_segmentslefts','left_eyes.previus_segmentleft_id','=','previous_segmentslefts.id')
                ->join('medical_records','diagnostics.id','=','medical_records.diagnostic_id')
                /*aqui terminan las relaciones*/

             ->where('diagnostics.id','=',$id)
            
            ->first();
            
    $pdf = \App::make('dompdf.wrapper');
    $pdf = \PDF::loadView('Diagnostic.reports.FormulaPDF',['diagnostic'=>$diagnostic,'categorias'=>$categorias]);
    return $pdf->stream('Formula.pdf');

    }
}
