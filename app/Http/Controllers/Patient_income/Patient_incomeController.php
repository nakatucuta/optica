<?php

namespace App\Http\Controllers\Patient_income;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\patient_income\Patient_income;
use App\Models\appointment_calendar\Appointment_calendar;
use App\Http\Requests\Patient_income\Patient_incomeCreateRequest;
use App\Http\Requests\Patient_income\Patient_incomeUpdateRequest;
class Patient_incomeController extends Controller
{


      public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_ingre', ['only' =>'create']);
        $this->middleware('edit_ingre', ['only' =>'edit']);
        $this->middleware('elim_ingre', ['only' =>'show']);
        
       

    }
    /*
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias = Patient_income::orderBy('id','desc')
            ->paginate();

             return view('Patient_income.index',["categorias"=>$categorias]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $citaconsulta = \DB::table('natural_people')->where('appointment_calendars.state_id','=','1')
            ->select( \DB::raw('CONCAT(natural_people.identification,", ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname,", ",appointment_calendars.date,", ",appointment_calendars.time,", ",states.name) AS citaconsulta '),'appointment_calendars.id')
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
            ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
             ->join('states','appointment_calendars.state_id','=','states.id')->whereNotIn('appointment_calendars.id', function($q){
    $q->select('appointment_calendar_id')->from('patient_incomes');
        })
            
            ;

           /*          $citaconsulta = \DB::table('appointment_calendars')->whereNotIn('id', function($q){
    $q->select('appointment_calendar_id')->from('patient_incomes');
        });*/

            $person = $citaconsulta->get()->pluck('citaconsulta','id')->prepend('selecciona',0);



            $servicioconsulta = \DB::table('services')
            ->select( \DB::raw('CONCAT(services.name_service,", ",services.value_service) AS servicioconsulta '),'services.id')

            
            ;


            $person1 = $servicioconsulta->get()->pluck('servicioconsulta','id')->prepend('selecciona',0);



             $ordendeservicioconsulta = \DB::table('service_orders')
            ->select( \DB::raw('CONCAT(service_orders.code,", ",service_orders.date_order,", ",service_orders.description,",",service_orders.value_to_pay) AS ordendeservicioconsulta '),'service_orders.id')

            
            ;


            $person2 = $ordendeservicioconsulta->get()->pluck('ordendeservicioconsulta','id')->prepend('selecciona',0);


        return view('Patient_income.create',["person"=>$person,"person1"=>$person1,"person2"=>$person2]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Patient_incomeCreateRequest $request)
    {

         $description_income = new Patient_income;
        /* $citas = Appointment_calendar::find('state_id');*/
         $description_income->description_income = $request->description_income;
                    $description_income->companion = $request->companion;
                     $description_income->companion_phone_number = $request->companion_phone_number;
                    $description_income->kinship = $request->kinship;
                     $description_income->responsible = $request->responsible;
                     $description_income->phone_responsible = $request->phone_responsible;
                     $description_income->relationship_resposible = $request->relationship_resposible;
                     $description_income->appointment_calendar_id = $request->appointment_calendar_id;
                     $description_income->service_id = $request->service_id;
                     $description_income->service_order_id = $request->service_order_id;
                     /*$description_income->appointment_calendar()->state_id = '2';*/
                     $description_income->save();
                    /* if ($description_income) {
                        Appointment_calendar::where('state_id',1)


                            ->update(['state_id'=>2]);
                     }*//*ojo asi actualizar un campo despues de cierta accion*/
                     
      
                 return redirect()->route('patient_income.index')
                  ->with('info',' El Ingreso Fue Almacenado Exitosamente..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incomeshow = Patient_income::find($id);
           $categorias=\DB::table('appointment_calendars')->select('patient_incomes.id','patient_incomes.description_income','patient_incomes.companion','patient_incomes.kinship','patient_incomes.responsible','patient_incomes.companion_phone_number','patient_incomes.phone_responsible','patient_incomes.relationship_resposible','appointment_calendars.date as fechacita','services.name_service as nombreservicio','service_orders.code as codeservicio')
             ->join('patient_incomes','appointment_calendars.id','=','patient_incomes.appointment_calendar_id')

             ->join('services','patient_incomes.service_id','=','services.id')

             ->join('service_orders','patient_incomes.service_order_id','=','service_orders.id')
            
            ->first();
            ;
          //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar aqui es con la migracion  que trabajas ojo

        
         return view('Patient_income.show',["incomeshow"=>$incomeshow,"categorias"=>$categorias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $incomeedit = Patient_income::find($id);
         $citaconsulta = \DB::table('natural_people')->where('appointment_calendars.state_id','=','2')
            ->select( \DB::raw('CONCAT(natural_people.identification,", ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname,", ",appointment_calendars.date,", ",appointment_calendars.time,", ",states.name) AS citaconsulta '),'appointment_calendars.id')
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
            ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
             ->join('states','appointment_calendars.state_id','=','states.id')
            
            ;


            $person = $citaconsulta->get()->pluck('citaconsulta','id')->prepend('selecciona',0);



            $servicioconsulta = \DB::table('services')
            ->select( \DB::raw('CONCAT(services.name_service,", ",services.value_service) AS servicioconsulta '),'services.id')

            
            ;


            $person1 = $servicioconsulta->get()->pluck('servicioconsulta','id')->prepend('selecciona',0);



             $ordendeservicioconsulta = \DB::table('service_orders')
            ->select( \DB::raw('CONCAT(service_orders.code,", ",service_orders.date_order,", ",service_orders.description,",",service_orders.value_to_pay) AS ordendeservicioconsulta '),'service_orders.id')

            
            ;


            $person2 = $ordendeservicioconsulta->get()->pluck('ordendeservicioconsulta','id')->prepend('selecciona',0);


        return view('Patient_income.edit',["person"=>$person,"person1"=>$person1,"person2"=>$person2,"incomeedit"=>$incomeedit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Patient_incomeUpdateRequest $request, $id)
    {
        $incomeupdate = Patient_income::find($id);
    
            
             $incomeupdate->description_income = $request->description_income;
                    $incomeupdate->companion = $request->companion;
                     $incomeupdate->companion_phone_number = $request->companion_phone_number;
                    $incomeupdate->kinship = $request->kinship;
                     $incomeupdate->responsible = $request->responsible;
                     $incomeupdate->phone_responsible = $request->phone_responsible;
                     $incomeupdate->relationship_resposible = $request->relationship_resposible;
                     $incomeupdate->appointment_calendar_id = $request->appointment_calendar_id;
                     $incomeupdate->service_id = $request->service_id;
                     $incomeupdate->service_order_id = $request->service_order_id;
                     
                  $incomeupdate->save();
                 return redirect()->route('patient_income.index')
             ->with('info',' El Ingreso Fue Modificado Exitosamente..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incomeelimina = Patient_income::find($id);
        
                $incomeelimina->delete();
                return redirect()->route('patient_income.index')
                ->with('error',' El Ingreso Fue Eliminado Exitosamente..!');
    }

    public function detail ($id){

        $incomeshow = Patient_income::find($id);
           $categorias=\DB::table('appointment_calendars')->select('patient_incomes.id','patient_incomes.description_income','patient_incomes.companion','patient_incomes.kinship','patient_incomes.responsible','patient_incomes.companion_phone_number','patient_incomes.phone_responsible','patient_incomes.relationship_resposible','appointment_calendars.date as fechacita','services.name_service as nombreservicio','service_orders.code as codeservicio')
             ->join('patient_incomes','appointment_calendars.id','=','patient_incomes.appointment_calendar_id')

             ->join('services','patient_incomes.service_id','=','services.id')

             ->join('service_orders','patient_incomes.service_order_id','=','service_orders.id')
            ->where('patient_incomes.id','=',$id)/*ojo este hace que funcone*/
            ->first();
            ;
       

        
         return view('Patient_income.detail',["incomeshow"=>$incomeshow,"categorias"=>$categorias]);

    }


    public function search(Request $request){

         $query=trim($request->get('query'));
         $categorias=\DB::table('appointment_calendars')->where('natural_people.identification','LIKE','%'.$query.'%')->select('natural_people.identification','patient_incomes.id','patient_incomes.description_income','patient_incomes.companion','patient_incomes.kinship','patient_incomes.responsible','patient_incomes.companion_phone_number','patient_incomes.phone_responsible','patient_incomes.relationship_resposible','appointment_calendars.date as fechacita','services.name_service as nombreservicio','service_orders.code as codeservicio')
             ->join('patient_incomes','appointment_calendars.id','=','patient_incomes.appointment_calendar_id')

             ->join('affiliations','appointment_calendars.affiliation_id','=','affiliations.id')

             ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')
             ->join('services','patient_incomes.service_id','=','services.id')

             ->join('service_orders','patient_incomes.service_order_id','=','service_orders.id')->orderBy('id','desc')
            ->paginate()
             ;

              return view('Patient_income.buscar',["categorias"=>$categorias,"query"=>$query]);

    }
}
