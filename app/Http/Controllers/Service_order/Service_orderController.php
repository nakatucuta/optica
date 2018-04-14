<?php

namespace App\Http\Controllers\Service_order;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\service_order\Service_order;
use App\Http\Requests\Service_order\Service_orderCreateRequest;
use App\Http\Requests\Service_order\Service_orderUpdateRequest;
class Service_orderController extends Controller
{



     public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_auto', ['only' =>'create']);
        $this->middleware('edit_auto', ['only' =>'edit']);
        $this->middleware('elim_auto', ['only' =>'show']);
       
        
       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request)
        {   
           
            $query=trim($request->get('searchText'));
            $categorias=\DB::table('affiliations')->where('code','LIKE','%'.$query.'%')->select('service_orders.id','service_orders.code','service_orders.date_order','service_orders.description','service_orders.value_to_pay','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apellido1','natural_people.second_surname as apellido2')
                ->join('service_orders','affiliations.id','=','service_orders.affiliation_id') 
                ->join('natural_people','affiliations.natural_person_id','=','natural_people.id') 

          
            ->orderBy('id','desc')
            ->paginate();

            return view('Service_order.index',["categorias"=>$categorias,"searchText"=>$query]);


           
            
                        
                    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $afiliadoConsulta = \DB::table('affiliations')
            ->select( \DB::raw('CONCAT(natural_people.identification," ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname," ",legal_entities.business_name) AS afiliation_consulta '),'affiliations.id')->where('affiliations.legal_entity_id','!=','4')
            
            ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')
            ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id');  
            
             

          
            $afiliados = $afiliadoConsulta->get()->pluck('afiliation_consulta','id')->prepend('selecciona', 0);
        return view('Service_order.create',["person"=>$afiliados]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Service_orderCreateRequest $request)
    {
        Service_order::create($request->all());
                           

      
                 return redirect()->route('service_order.index')
                 ->with('info',' La Autorisacion Fue Almacenado Exitosamente..!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service_ordershow = Service_order::find($id);
       $categorias=\DB::table('affiliations')->select('service_orders.id','service_orders.code','service_orders.date_order','service_orders.description','service_orders.value_to_pay','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apellido1','natural_people.second_surname as apellido2')
                ->join('service_orders','affiliations.id','=','service_orders.affiliation_id') 
                ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')
          
            ->orderBy('id','desc')
            ->paginate()->first();

            return view('Service_order.show',["categorias"=>$categorias,"service_ordershow"=>$service_ordershow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service_orderedit = Service_order::find($id);

         $afiliadoConsulta = \DB::table('affiliations')
            ->select( \DB::raw('CONCAT(natural_people.identification," ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname," ",legal_entities.business_name) AS afiliation_consulta '),'affiliations.id')->where('affiliations.legal_entity_id','!=','4')
            
            ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')
            ->join('legal_entities','affiliations.legal_entity_id','=','legal_entities.id');  
            
             

          
            $afiliados = $afiliadoConsulta->get()->pluck('afiliation_consulta','id')->prepend('selecciona', 0);
        
         
            

             return view('Service_order.edit',["service_orderedit"=>$service_orderedit,"person"=>$afiliados]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Service_orderUpdateRequest $request, $id)
    {
         $service_orderupdate = Service_order::find($id);
    
            
             $service_orderupdate->code = $request->code;
                    $service_orderupdate->date_order = $request->date_order;
                     $service_orderupdate->description = $request->description;
                     $service_orderupdate->value_to_pay = $request->value_to_pay;


                  $service_orderupdate->save();
                 return redirect()->route('service_order.index')
             ->with('info',' La Autorisacion Fue Modificada Exitosamente..!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service_orderdestroy = Service_order::find($id);
        
                $service_orderdestroy->delete();
                return redirect()->route('service_order.index')
                 ->with('error',' La Autorisacion Fue Eliminada Exitosamente..!');
    }


    public function detail($id){

        $service_ordershow = Service_order::find($id);
        $categorias=\DB::table('affiliations')->select('service_orders.id','service_orders.code','service_orders.date_order','service_orders.description','service_orders.value_to_pay','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apellido1','natural_people.second_surname as apellido2')
                ->join('service_orders','affiliations.id','=','service_orders.affiliation_id') 
                ->join('natural_people','affiliations.natural_person_id','=','natural_people.id')
          
            ->orderBy('id','desc')
            ->paginate()->first();

            return view('Service_order.detail',["categorias"=>$categorias,"service_ordershow"=>$service_ordershow]);
    }
}
