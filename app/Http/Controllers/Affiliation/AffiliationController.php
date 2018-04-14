<?php

namespace App\Http\Controllers\Affiliation;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\natural_person\Natural_person;
use App\Models\legal_entity\Legal_entity;
use App\Models\affiliation\Affiliation;
use App\Http\Requests\Affiliation\AffiliationCreateRequest;

class AffiliationController extends Controller
{


     public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_af', ['only' =>'create']);
        $this->middleware('edit_af', ['only' =>'edit']);
        $this->middleware('elim_af', ['only' =>'show']);
       

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
            $categorias=Affiliation::where('natural_people.identification','LIKE','%'.$query.'%')
            ->select('affiliations.id','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apellido1','natural_people.second_surname as apellido2','legal_entities.business_name as eps','affiliations.created_at as nn')
            ->join('natural_people','natural_people.id','=','affiliations.natural_person_id')
            ->join('legal_entities','legal_entities.id','=','affiliations.legal_entity_id')//aqui solo cambia donde dice id le pones el nombre del cmapo a buscar aqui es con la migracion  que trabajas ojo
          
            ->orderBy('id','desc')
            ->paginate();

            return view('Affiliation.index',["categorias"=>$categorias,"searchText"=>$query]);


           
            
                        
                    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        /*$person = Natural_person::get()->pluck('identification','id')->prepend('selecciona',0);*/
           
            $natural_consulta = \DB::table('natural_people')
            ->select( \DB::raw('CONCAT(natural_people.identification,", ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname) AS natural_consulta '),'natural_people.id')
            
            ;

            $afiliadosSql = $natural_consulta->toSql();
            /*dd( $afiliadosSql );*/
            $natural_people_consult = $natural_consulta->get()->pluck('natural_consulta','id')->prepend('selecciona', 0);



             $person1 = Legal_entity::get()->pluck('business_name','id')->prepend('selecciona',0);
          

                 $query=trim($request->get('searchText'));
           /*para el buscar*/ $categorias=Affiliation::
            select('affiliations.id','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apellido1','natural_people.second_surname as apellido2','legal_entities.business_name as eps','affiliations.created_at as nn')->where('natural_people.identification','LIKE','%'.$query.'%')
            ->join('natural_people','natural_people.id','=','affiliations.natural_person_id')
            ->join('legal_entities','legal_entities.id','=','affiliations.legal_entity_id')//aqui solo cambia donde dice id le pones el nombre del cmapo a buscar aqui es con la migracion  que trabajas ojo
          
            ->orderBy('id','desc')
            ->paginate();


            return view('Affiliation.create',["person"=>$natural_people_consult,"person1"=>$person1,"searchText"=>$query,"categorias"=>$categorias]);

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AffiliationCreateRequest $request)
    {
        
        $affiliation_store = new Affiliation;
        
            
        
                 $affiliation_store->natural_person_id = $request->natural_person_id;
                    $affiliation_store->legal_entity_id = $request->legal_entity_id;
                     
                    
        
                        
        
                           $affiliation_store->save();/*despues de llenado se guarda ya todo lo jala el request*/
                 return redirect()->route('affiliation.index')
                 ->with('info','la persona fue guardada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $affiliationshow = Affiliation::find($id);
          $categorias=\DB::table('affiliations')
          ->join('natural_people','natural_people.id','=','affiliations.natural_person_id')
          ->join('legal_entities','legal_entities.id','=','affiliations.legal_entity_id')
         
            ->select('affiliations.id','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apellido1','natural_people.second_surname as apellido2','legal_entities.business_name as eps','affiliations.created_at as nn') 
            ->where('affiliations.id','=',$id)
            ->first();
            ;
          //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar aqui es con la migracion  que trabajas ojo

        
         return view('Affiliation.show',["affiliationshow"=>$affiliationshow,"categorias"=>$categorias]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $affiedit = Affiliation::find($id);

$natural_consulta = \DB::table('natural_people')
            ->select( \DB::raw('CONCAT(natural_people.identification,", ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname) AS natural_consulta '),'natural_people.id')
            
            ;

            $afiliadosSql = $natural_consulta->toSql();
            /*dd( $afiliadosSql );*/
            $natural_people_consult = $natural_consulta->get()->pluck('natural_consulta','id')->prepend('selecciona', 0);

             $person1 = Legal_entity::get()->pluck('business_name','id')->prepend('selecciona',0);

        


         return view('Affiliation.edit',["affiedit"=>$affiedit,"person"=>$natural_people_consult,"person1"=>$person1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $affiliationedit = Affiliation::find($id);
    
            
            
    
               $affiliationedit->natural_person_id = $request->natural_person_id;
                    $affiliationedit->legal_entity_id = $request->legal_entity_id;
                   

                $affiliationedit->save();   
               
    
                
                 return redirect()->route('affiliation.index')
             ->with('info','la persona fue Actualizada  ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $affiliationelimina = Affiliation::find($id);
        
                $affiliationelimina->delete();
                return redirect()->route('affiliation.index')
                ->with('info','la Alfiliacion fue eliminada');
    }

    public function detail ($id){

             $affiliationshow = Affiliation::find($id);
          $categorias=\DB::table('affiliations')
          ->join('natural_people','natural_people.id','=','affiliations.natural_person_id')
          ->join('legal_entities','legal_entities.id','=','affiliations.legal_entity_id')
         
            ->select('affiliations.id','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apellido1','natural_people.second_surname as apellido2','legal_entities.business_name as eps','affiliations.created_at as nn') 
            ->where('affiliations.id','=',$id)
            ->first();
            ;
          //aqui solo cambia donde dice id le pones el nombre del cmapo a buscar aqui es con la migracion  que trabajas ojo

        
         return view('Affiliation.detail',["affiliationshow"=>$affiliationshow,"categorias"=>$categorias]);

    }


    public function affiliationPDF ($id){

         $affiliation = Affiliation::find($id);
           /*$affiliation = Affiliation::all(); los muestra todos*/
          $categorias=\DB::table('affiliations')
          ->join('natural_people','natural_people.id','=','affiliations.natural_person_id')
          ->join('legal_entities','legal_entities.id','=','affiliations.legal_entity_id')
         
            ->select('affiliations.id','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apellido1','natural_people.second_surname as apellido2','legal_entities.business_name as eps','affiliations.created_at as nn') 
             ->where('affiliations.id','=',$id)
            
            ->first();
            
    $pdf = \App::make('dompdf.wrapper');
    $pdf = \PDF::loadView('Affiliation.reports.affiliatonpdf',['affiliation'=>$affiliation,'categorias'=>$categorias]);
    return $pdf->stream('Entradas.pdf');


    }
}
