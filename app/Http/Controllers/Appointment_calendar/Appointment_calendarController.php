<?php

namespace App\Http\Controllers\Appointment_calendar;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\appointment_calendar\Appointment_calendar;
use App\Models\affiliation\Affiliation;
use App\User;
use App\Models\state\State;
use App\Models\natural_person\Natural_person;
use App\Http\Requests\Appointment_calendar\Appointment_calendarCreateRequest;
use App\Http\Requests\Appointment_calendar\Appointment_calendarUpdateRequest;
use Session;
use Carbon\Carbon;

class Appointment_calendarController extends Controller
{


     public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_cit', ['only' =>'create']);
        $this->middleware('edit_cit', ['only' =>'edit']);
        $this->middleware('elim_cit', ['only' =>'show']);
        
       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {       

            /*$fecha = Carbon::now('America/Bogota');
            $nn = $fecha->format('Y-m-d');

            $hora = Carbon::now();->addSeconds(60)
        $horita = $hora->format('h:i:s');*/


          $query=trim($request->get('searchText'));
           $categorias = Appointment_calendar::where('appointment_calendars.date','LIKE','%'.$query.'%')->orderBy('id','desc')
            ->paginate();
            
                
             
              
/* $query=trim($request->get('searchText'));
            $categorias= Natural_person::where('natural_people.identification','LIKE','%'.$query.'%')
            ->select('appointment_calendars.id','appointment_calendars.date','appointment_calendars.time','states.name as nn','natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname','users.email','appointment_calendars.state_id','appointment_calendars.state_id')
            
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
            ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id')      
            ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
            ->join('users','users.id','=','appointment_calendars.user_id')  
            ->join('states','appointment_calendars.state_id','=','states.id')        
            ->orderBy('id','desc')
            ->paginate();*/
                


           
           
            /*$query=trim($request->get('searchText'));
            $categorias=\DB::table('natural_people')->where('natural_people.identification','LIKE','%'.$query.'%')
            ->select('appointment_calendars.id','appointment_calendars.date as fecha','appointment_calendars.time','states.name  as estado','natural_people.first_name as afil','natural_people.second_name as segundo','natural_people.surname as apellido','natural_people.second_surname as apellido2','users.email as usuario','appointment_calendars.state_id as estadonum')
            
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
            ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id')      
            ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
            ->join('users','users.id','=','appointment_calendars.user_id')  
            ->join('states','appointment_calendars.state_id','=','states.id')        
            ->orderBy('id','desc')
            ->paginate();

                <tr>
                        <td>{{ $entidad->id}}</td>
                        <td>{{ $entidad->fecha}}</td>
                        <td>{{ $entidad->time}}</td>
                        @if($entidad->estadonum == 1)

                                <td  id="nenes">{{ $entidad->estado}}</td>
                                
                                @endif

                                @if($entidad->estadonum == 2)


                                <td  id="neness">{{ $entidad->estado}}</td>
                                @endif

                                @if($entidad->estadonum == 3)

                                
                                <td  id="neness">{{ $entidad->estado}}</td>
                                @endif
                        
                        <td>{{ $entidad->afil.' '.$entidad->segundo.' '.$entidad->apellido.' '.$entidad->apellido2}}</td>
                        <td>{{ $entidad->usuario}}</td>


            */

            return view('Appointment_calendar.index',["categorias"=>$categorias,"searchText"=>$query/*,"model"=>$model*//*,"nn"=>$nn,"horita"=>$horita*/]);


           
            
                        
                    
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
             $afiliadoConsulta = \DB::table('genders')
            ->select( \DB::raw('CONCAT(natural_people.identification," ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname," ",legal_entities.business_name," ,",affiliations.created_at) AS afiliation_consulta '),'affiliations.id')->where('affiliations.legal_entity_id','!=','4')
            
            ->join('natural_people','genders.id','=','natural_people.genders_id')    
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
             ->join('legal_entities','legal_entities.id','=','affiliations.legal_entity_id');

            $afiliadosSql = $afiliadoConsulta->toSql();
            /*dd( $afiliadosSql );*/
            $afiliados = $afiliadoConsulta->get()->pluck('afiliation_consulta','id')->prepend('selecciona', 0);


            $person3 = \DB::table('appointment_calendars')
            ->select( \DB::raw('CONCAT(natural_people.identification," ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname) AS ombe '),'appointment_calendars.affiliation_id')
            
            ->join('affiliations','affiliations.id','=','appointment_calendars.affiliation_id')
            ->join('natural_people','natural_people.id','=','affiliations.natural_person_id')      
            
              
            ->get();




            $person1 = User::get()->pluck('name','id')->prepend('selecciona', 0);
            $person2 = State::get()->pluck('name','id')->prepend('selecciona', 0);
           


        return view('Appointment_calendar.create',["person"=> $afiliados,"person1"=>$person1,"person2"=>$person2,"person3"=>$person3]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Appointment_calendarCreateRequest $request)
    {   
      
         /*  dd($request->date);*/
                           

         
      Appointment_calendar::create($request->all());
 /*Session::flash('save','El registro se ha actualizado correctamente');*/
                 return redirect()->route('appointment_calendar.index')->with('info',' la cita fue reservada Exitosamente..!');
                 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $appointmentshow = Appointment_calendar::find($id);
         $appointmentshow1 = Appointment_calendar::find($id);
          $categorias=\DB::table('natural_people')
            ->select('appointment_calendars.id','appointment_calendars.date as fecha','appointment_calendars.time','states.name  as estado','natural_people.first_name as afil','natural_people.second_name as segundo','natural_people.surname as apellido','natural_people.second_surname as apellido2','users.email as usuario','legal_entities.business_name as entidad')
            
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
            ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id')      
            ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
            ->join('users','users.id','=','appointment_calendars.user_id')  
            ->join('states','appointment_calendars.state_id','=','states.id')
            ->where('appointment_calendars.id','=',$id)
            ->first();
            ;
          //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar aqui es con la migracion  que trabajas ojo

        
         return view('Appointment_calendar.show',["appointmentshow"=>$appointmentshow,"categorias"=>$categorias,"appointmentshow1"=>$appointmentshow1]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


         $citasedit = Appointment_calendar::find($id);
         $afiliadoConsulta = \DB::table('genders')
            ->select( \DB::raw('CONCAT(natural_people.identification," ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname," ",legal_entities.business_name," ,",affiliations.created_at) AS afiliation_consulta '),'affiliations.id')
            
            ->join('natural_people','genders.id','=','natural_people.genders_id')    
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
             ->join('legal_entities','legal_entities.id','=','affiliations.legal_entity_id');

            $afiliadosSql = $afiliadoConsulta->toSql();
            /*dd( $afiliadosSql );*/
            $afiliados = $afiliadoConsulta->get()->pluck('afiliation_consulta','id')->prepend('selecciona', 0);


            



            $person1 = User::get()->pluck('name','id')->prepend('selecciona', 0);
            $person2 = State::get()->pluck('name','id')->prepend('selecciona', 0);
            
            $categorias=\DB::table('natural_people')
            ->select('appointment_calendars.id','appointment_calendars.date as fecha','appointment_calendars.time','states.name  as estado','natural_people.first_name as afil','natural_people.second_name as segundo','natural_people.surname as apellido','natural_people.second_surname as apellido2','users.email as usuario')
            
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
            ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id')      
            ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
            ->join('users','users.id','=','appointment_calendars.user_id')  
            ->join('states','appointment_calendars.state_id','=','states.id')        
            ->orderBy('id','desc')
            ->paginate();

            return view('Appointment_calendar.edit',["categorias"=>$categorias,"person"=> $afiliados,"person1"=>$person1,"person2"=>$person2,"citasedit"=>$citasedit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Appointment_calendarUpdateRequest $request, $id)
    {
          
               
    $citaedit = Appointment_calendar::FindOrFail($id);
        $input= $request->all();
        $citaedit->fill($input)->save();
        Session::flash('update','El registro se ha actualizado correctamente');
                
                 return redirect()->route('appointment_calendar.index')->with('info',' la cita fue modificada Exitosamente..!');
             
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $appointmentdestroy = Appointment_calendar::find($id);
        
                $appointmentdestroy->delete();
                Session::flash('delete','El registro se ha eliminado correctamente');
                return redirect()->route('appointment_calendar.index')->with('error',' la cita fue eliminada Exitosamente..!');



    }



    public function detalle($id){

         $appointmentshow = Appointment_calendar::find($id);
          $categorias=\DB::table('natural_people')
            ->select('appointment_calendars.id','appointment_calendars.date as fecha','appointment_calendars.time','states.name  as estado','natural_people.first_name as afil','natural_people.second_name as segundo','natural_people.surname as apellido','natural_people.second_surname as apellido2','users.email as usuario','legal_entities.business_name as entidad')
            
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
            ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id')      
            ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
            ->join('users','users.id','=','appointment_calendars.user_id')  
            ->join('states','appointment_calendars.state_id','=','states.id')
            ->where('appointment_calendars.id','=',$id)
            ->first();
            ;
          //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar aqui es con la migracion  que trabajas ojo

        
         return view('Appointment_calendar.detalle',["appointmentshow"=>$appointmentshow,"categorias"=>$categorias]);
    }


    public function charts (){
        $graficas = Appointment_calendar::select('date','state_id')->get();

        return view('Appointment_calendar.grafic')->with('graficas',$graficas);
    }/*metodo para la grafica*/


    /*public function search(Request $request){


         $query=trim($request->get('query'));

         $categorias= Natural_person::where('natural_people.identification','LIKE','%'.$query.'%')
            ->select('appointment_calendars.id','appointment_calendars.date as fecha','appointment_calendars.time','states.name  as estado','natural_people.first_name as afil','natural_people.second_name as segundo','natural_people.surname as apellido','natural_people.second_surname as apellido2','users.email as usuario','legal_entities.business_name as entidad')
            
            ->join('affiliations','natural_people.id','=','affiliations.natural_person_id')
            ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id')      
            ->join('appointment_calendars','affiliations.id','=','appointment_calendars.affiliation_id')
            ->join('users','users.id','=','appointment_calendars.user_id')  
            ->join('states','appointment_calendars.state_id','=','states.id')->orderBy('id','desc')
            ->paginate()
             ;

          return view('Appointment_calendar.buscar',["categorias"=>$categorias,"query"=>$query]);
    }
*/

    
}


