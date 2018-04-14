<?php

namespace App\Http\Controllers\Legal_entity;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Legalentity\EntytiCreateRequest;
use App\Http\Requests\Legalentity\Legal_entityUpdateRequest;
use App\Models\legal_entity\Legal_entity;
use App\Models\entity_type\Entity_type;

class Legal_EntityController extends Controller
{


    public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_entity', ['only' =>'create']);
        $this->middleware('edit_entity', ['only' =>'edit']);
        $this->middleware('elim_entity', ['only' =>'show']);
        
        
       
        
       

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
            // $person = persons::get()->pluck('identification','id')->prepend('selecciona');
            $query=trim($request->get('searchText'));
            $categorias=\DB::table('entity_types')->select('legal_entities.id','legal_entities.business_name','legal_entities.nit','legal_entities.adress','legal_entities.social_object','legal_entities.Postal_Code','legal_entities.email','legal_entities.phone_number','entity_types.name_type')
            ->where('business_name','LIKE','%'.$query.'%') //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar
            ->join('legal_entities','entity_types.id','=','legal_entities.entity_types_id')

            ->orderBy('id','desc')
            ->paginate();

            return view('Legal_entity.index',["categorias"=>$categorias,"searchText"=>$query]);


           
            
                        
                    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $person = Entity_type::get()->pluck('name_type','id')->prepend('selecciona',0);

         return view('Legal_entity.create',["person"=>$person]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EntytiCreateRequest $request)
    {
        $entytistore = new Legal_entity;
        
            
        
                 $entytistore->business_name = $request->business_name;
                    $entytistore->nit = $request->nit;
                     $entytistore->adress = $request->adress;
                    $entytistore->social_object = $request->social_object;
                     $entytistore->Postal_Code = $request->Postal_Code;
                     $entytistore->email = $request->email;
                     $entytistore->phone_number = $request->phone_number;
                     $entytistore->entity_types_id = $request->entity_types_id;
                    
        
                        
        
                           $entytistore->save();/*despues de llenado se guarda ya todo lo jala el request*/
                 return redirect()->route('legalentity.index')
                 ->with('info','La Empresa Fue Almacenada Exitosamente..!');
                 /*
                 1)se deja el request en el parentise despues de store
                 2)se coloca $this->validate($request,['bussiness' => 'required', 'nit' => 'required|numeric'])
                 */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $entityshow = Legal_entity::find($id);
          $categorias=\DB::table('entity_types')->select('legal_entities.id','legal_entities.business_name','legal_entities.nit','legal_entities.adress','legal_entities.social_object','legal_entities.Postal_Code','legal_entities.email','legal_entities.phone_number','entity_types.name_type as nn')
           
            ->join('legal_entities','entity_types.id','=','legal_entities.entity_types_id')
            ->first();

        return view('Legal_entity.show',["entityshow"=>$entityshow,"categorias"=>$categorias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $entytiedit = legal_entity::find($id);
          $person = Entity_type::get()->pluck('name_type','id')->prepend('selecciona',0);

        return view('legal_entity.edit',["entytiedit"=>$entytiedit,"person"=>$person]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Legal_entityUpdateRequest $request, $id)
    {
        $entityact = legal_entity::find($id);
    
            
               /* $persontc->address = $request->address;
                $persontc->email = $request->email;
                $persontc->phone = $request->phone;
                $persontc->identification = $request->identification;*/
                 
                 
                
    
                 
             /* $entityact->person_id = $persontc->id ;*/
    
                $entityact->business_name = $request->business_name;
                $entityact->nit = $request->nit;
                $entityact->adress = $request->adress;
                $entityact->social_object = $request->social_object;
                $entityact->Postal_Code = $request->Postal_Code;
                $entityact->email = $request->email;
                $entityact->phone_number = $request->phone_number;
                $entityact->entity_types_id = $request->entity_types_id;

                $entityact->save();   
                 /* if($entityact->save())
                {
                    return redirect()->route('legalentity.index')
                    ->with('info','la empresa fue acualizasada');
                }*/
    
                
                 return redirect()->route('legalentity.index')
             ->with('info','La Empresa fue Modificada Exitosamente..!  ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $entityelimina = legal_entity::find($id);
        
                $entityelimina->delete();
                return redirect()->route('legalentity.index')
                ->with('error','La Empresa Fue Eliminada Exitosamente');
    }

    public function detail($id){
          $entityshow = Legal_entity::find($id);
          $categorias=\DB::table('entity_types')->select('legal_entities.id','legal_entities.business_name','legal_entities.nit','legal_entities.adress','legal_entities.social_object','legal_entities.Postal_Code','legal_entities.email','legal_entities.phone_number','entity_types.name_type as nn')
           
            ->join('legal_entities','entity_types.id','=','legal_entities.entity_types_id')
            ->first();

        return view('Legal_entity.detail',["entityshow"=>$entityshow,"categorias"=>$categorias]);

    }
}
