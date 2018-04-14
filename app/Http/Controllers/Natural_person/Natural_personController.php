<?php

namespace App\Http\Controllers\Natural_person;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\natural_person\Natural_person;
use App\Models\identification_description\Identification_description;
use App\Models\gender\Gender;
use App\Http\Requests\Natural_person\Natural_personCreateRequest;
use App\Http\Requests\Natural_person\Natural_personUpdateRequest;
use Image;
class Natural_personController extends Controller
{

    public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('admin', ['only' =>'create']);
        $this->middleware('editar_pn', ['only' =>'edit']);
        $this->middleware('eliminar_pn', ['only' =>'show']);

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
            
           /*$natural = Natural_person::orderBy('id','DESC');   \DB::table('natural_people')->*/
           $query=trim($request->get('searchText'));
             $categorias= Natural_person::where('identification','LIKE','%'.$query.'%')
             ->select('natural_people.id','identification_descriptions.name_identification as tip','natural_people.identification as identifi','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apelli','natural_people.second_surname as ape2','natural_people.date_of_birth as cumple','natural_people.phone_number as tel','natural_people.occupation as cop','genders.name_gender as gen','natural_people.email as correo','natural_people.address as dir','natural_people.image')

              ->join('identification_descriptions','identification_descriptions.id','=','natural_people.identification_description_id')

              ->join('genders','genders.id','=','natural_people.genders_id')
           
          
            ->orderBy('id','desc')
            ->paginate();

            return view('Natural_person.index',["categorias"=>$categorias,"searchText"=>$query/*,"natural"=>$natural*/]);


           
            
                        
                    
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $person = Identification_description::get()->pluck('name_identification','id')->prepend('selecciona',0);
            $person1 = Gender::get()->pluck('name_gender','id')->prepend('selecciona');


            return view('Natural_person.create',["person"=>$person,"person1"=>$person1]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Natural_personCreateRequest $request)
    {


             




        /* $natural_store = new Natural_person;*/
        
            


        
                /* $natural_store->identification_description_id = $request->identification_description_id;
                    $natural_store->identification = $request->identification;
                     $natural_store->first_name = $request->first_name;
                    $natural_store->second_name = $request->second_name;
                     $natural_store->surname = $request->surname;
                     $natural_store->second_surname = $request->second_surname;
                     $natural_store->date_of_birth = $request->date_of_birth;
                     $natural_store->phone_number = $request->phone_number;
                     $natural_store->occupation = $request->occupation;
                     $natural_store->genders_id = $request->genders_id;
                     $natural_store->email = $request->email;
                     $natural_store->address = $request->address;*/


                     $img=Natural_person::create($request->all());
                    $imagen = $request->file('image');
                    $photo = $request->file('image')->getClientOriginalName();
                    Image::make($imagen)->resize(380, 600)->save(public_path('/images/' . $photo ) );
                    Natural_person::find($request->get('id'));
                    $img->image = $photo;
                    $img->save();
                    
        
                        
        
                          /* $natural_store->save();*/

                         /*  Natural_person::create($request->all());*/
                 return redirect()->route('natural_person.index')
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
        $naturalshow = Natural_person::find($id);

         $categorias=\DB::table('natural_people')
             ->select('natural_people.id','identification_descriptions.name_identification as tip','natural_people.identification as identifi','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apelli','natural_people.second_surname as ape2','natural_people.date_of_birth as cumple','natural_people.phone_number as tel','natural_people.occupation as cop','genders.name_gender as gen','natural_people.email as correo','natural_people.address as dir')

              ->join('identification_descriptions','identification_descriptions.id','=','natural_people.identification_description_id')

              ->join('genders','genders.id','=','natural_people.genders_id')
               ->where('natural_people.id','=',$id)
               ->first();

               return view('Natural_person.show',["categorias"=>$categorias,"naturalshow"=>$naturalshow]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
           $naturaledit = Natural_person::find($id);

        $person = Identification_description::get()->pluck('name_identification','id')->prepend('selecciona');
            $person1 = Gender::get()->pluck('name_gender','id')->prepend('selecciona');

             return view('Natural_person.edit',["naturaledit"=>$naturaledit,"person"=>$person,"person1"=>$person1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Natural_personUpdateRequest $request, $id)
    {



        /* $naturalupdate = Natural_person::find($id);
    
            
             $naturalupdate->identification_description_id = $request->identification_description_id;
                    $naturalupdate->identification = $request->identification;
                     $naturalupdate->first_name = $request->first_name;
                    $naturalupdate->second_name = $request->second_name;
                     $naturalupdate->surname = $request->surname;
                     $naturalupdate->second_surname = $request->second_surname;
                     $naturalupdate->date_of_birth = $request->date_of_birth;
                     $naturalupdate->phone_number = $request->phone_number;
                     $naturalupdate->occupation = $request->occupation;
                     $naturalupdate->genders_id = $request->genders_id;
                     $naturalupdate->email = $request->email;
                     $naturalupdate->address = $request->address;
    
                  $naturalupdate->save();
                 return redirect()->route('natural_person.index')
             ->with('info','la persona fue Actualizada  ');*/


                    $img=Natural_person::findOrFail($id);  
                    $img->update($request->all());



                   if ($request->hasFile('image'))
    {
            
                    
                    $imagen = $request->file('image');
                    $photo = $request->file('image')->getClientOriginalName();
                    Image::make($imagen)->resize(380, 600)->save(public_path('/images/' . $photo ) );
                    Natural_person::find($request->get('id'));
                    $request['image'] = $photo;/* ojo cambia po el origina*/
                    $img->save();                 
        } 


                 return redirect()->route('natural_person.index')
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
        $naturalelimina = Natural_person::find($id);
        
                $naturalelimina->delete();
                return redirect()->route('natural_person.index')
                ->with('info','la empresa fue eliminada');
    }


    public function detail($id){

         $naturalshow = Natural_person::find($id);

         $categorias=\DB::table('natural_people')
             ->select('natural_people.id','identification_descriptions.name_identification as tip','natural_people.identification as identifi','natural_people.first_name as nombre','natural_people.second_name as segundo','natural_people.surname as apelli','natural_people.second_surname as ape2','natural_people.date_of_birth as cumple','natural_people.phone_number as tel','natural_people.occupation as cop','genders.name_gender as gen','natural_people.email as correo','natural_people.address as dir')

              ->join('identification_descriptions','identification_descriptions.id','=','natural_people.identification_description_id')

              ->join('genders','genders.id','=','natural_people.genders_id')
               ->where('natural_people.id','=',$id)
               ->first();

               return view('Natural_person.detail',["categorias"=>$categorias,"naturalshow"=>$naturalshow]);

    }
}
