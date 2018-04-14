<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\type_service\Type_service;
use App\Models\service\Service;
use App\Http\Requests\Service\ServiceCreateRequest;
use App\Http\Requests\Service\ServiceUpdateRequest;
class ServiceController extends Controller
{
    public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_service', ['only' =>'create']);
        $this->middleware('edit_service', ['only' =>'edit']);
        $this->middleware('elim_service', ['only' =>'show']);
        /*$this->middleware('admin', ['only' =>'show']);
        $this->middleware('admin', ['only' =>'detail']);
        */

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
            $categorias=\DB::table('services')->where('name_service','LIKE','%'.$query.'%')->select('services.id','services.name_service','services.value_service','services.type_service_id','type_services.type_service')
             ->join('type_services','type_services.id','=','services.type_service_id') //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar
          
            ->orderBy('id','desc')
            ->paginate();

            return view('Service.index',["categorias"=>$categorias,"searchText"=>$query]);


           
            
                        
                    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = Type_service::get()->pluck('type_service','id')->prepend('selecciona',0);


             return view('Service.create',["person"=>$person]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCreateRequest $request)
    {
        Service::create($request->all());
                           

      
                 return redirect()->route('service.index')
                 ->with('info','el servicio fue guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $serviceshow = Service::find($id);
         $categorias=\DB::table('services')->select('services.id','services.name_service','services.value_service','services.type_service_id','type_services.type_service as tiposervicio')
             ->join('type_services','type_services.id','=','services.type_service_id') //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar
          
            ->orderBy('id','desc')
            ->paginate()->first();

            return view('Service.show',["serviceshow"=>$serviceshow,"categorias"=>$categorias]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicedit = Service::find($id);

         $person = Type_service::get()->pluck('type_service','id')->prepend('selecciona',0);
            

             return view('Service.edit',["servicedit"=>$servicedit,"person"=>$person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateRequest $request, $id)
    {
         $serviceupdate = Service::find($id);
    
            
             $serviceupdate->name_service = $request->name_service;
                    $serviceupdate->value_service = $request->value_service;
                     $serviceupdate->type_service_id = $request->type_service_id;


                  $serviceupdate->save();
                 return redirect()->route('service.index')
             ->with('info','el servicio fue actualizado  ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicedestroy = Service::find($id);
        
                $servicedestroy->delete();
                return redirect()->route('service.index')
                ->with('error','el servicio fue eliminado');
    }

    public function detail ($id){


        $serviceshow = Service::find($id);
         $categorias=\DB::table('services')->select('services.id','services.name_service','services.value_service','services.type_service_id','type_services.type_service as tiposervicio')
             ->join('type_services','type_services.id','=','services.type_service_id') //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar
          
            ->orderBy('id','desc')
            ->paginate()->first();

            return view('Service.detail',["serviceshow"=>$serviceshow,"categorias"=>$categorias]);

    }
}
