<?php

namespace App\Http\Controllers\Devolution;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\devolution\Devolution;
use Session;
use App\Http\Requests\Devolution\DevolutionCreateRequest;
use App\Models\cartdetail\CartDetail;
class DevolutionController extends Controller
{


    public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_dev', ['only' =>'create']);
        $this->middleware('elim_dev', ['only' =>'show']);
        /*$this->middleware('edit_product', ['only' =>'edit']);
        */
        
        
       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devolutions = Devolution::orderBy('id','DESC')->paginate();
         return view('Devolution.index')->with(compact('devolutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


       
            



            



            $producto = \DB::table('products')
            ->select( \DB::raw('CONCAT(products.id,", ",products.name) AS producto' ),'products.id');
            



            $person = $producto->get()->pluck('producto','id')->prepend('selecciona',0);


             $factura = \DB::table('carts')->where('carts.status','=','Finalizada')/*->whereNotIn('carts.id', function($q){
    $q->select('cart_id')->from('devolutions');
        })*/
            ->select( \DB::raw('CONCAT(carts.id,", ",carts.created_at) AS factura' ),'carts.id');
            



            $person2 = $factura->get()->pluck('factura','id')->prepend('selecciona',0);



            $empleado = \DB::table('users')
            ->select( \DB::raw('CONCAT(users.id,", ",users.name) AS empleado' ),'users.id');
            



            $person3 = $empleado->get()->pluck('empleado','id')->prepend('selecciona',0);
        


         return view('Devolution.create',["person"=>$person,"person2"=>$person2,"person3"=>$person3]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DevolutionCreateRequest $request)
    {
        


         $description_income = new Devolution;
        
        /* $citas = Appointment_calendar::find('state_id');*/
         $description_income->return_date = $request->return_date;
                    $description_income->product_id = $request->product_id;
                     $description_income->quantity = $request->quantity;
                    
                     $description_income->cart_id = $request->cart_id;
                     $description_income->description = $request->description;
                     $description_income->user_id = auth()->user()->id;

                     
                           

/*OJOOOO MIRA ESTAS VALIDACIONES NO FUNCIONAN*/


                                 foreach ($description_income->cart->details as $key) {
                    
                                    /* if ($request->quantity > $key->quantity) {
                                     $noti_validacion = 'La cantidad a devolver es mayor a la cantidad comprada' ;
                                    return back()->with(compact('noti_validacion'));
                                    }*/

                                     if ($key->cart->Total - $key->cart->Totaldev  <= 0) {
                                         $noti_validacion = 'ya se devolvieron todos los productos de esta factura' ;
                                    return back()->with(compact('noti_validacion'));
                                    }
                   


                                    if ($request->product_id == $key->product_id ) {



                                    $description_income->save();
                                    Session::flash('save','Los registros han sido guardados correctamente');
                                    return redirect()->route('devolution.index');

                                    }




                                        
                                        
                                   
                                         
                                    /*else{

                                                $noti_validacion = 'el producto no coincide con la factura';
                                                return back()->with(compact('noti_validacion'));
                                        
                                    }*/
                                }




                                 

                     
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $devolutionshow = Devolution::find($id);
         
         
          

        
         return view('Devolution.show',["devolutionshow"=>$devolutionshow]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $devolutiondestroy = Devolution::find($id);
        
                $devolutiondestroy->delete();
                Session::flash('delete','El registro se ha eliminado correctamente');
                return redirect()->route('devolution.index');
    }



    public function detail($id){

        $devolution_detail = Devolution::find($id);
         
        

       $consulta =\DB::table('carts')->select('natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname','natural_people.identification')
        ->join('devolutions','carts.id','=','devolutions.cart_id')
        ->join('natural_people','carts.natural_people_id','=','natural_people.id')

            
            ->where('devolutions.id','=',$id)/*ojo este hace que funcone*/
            ->first();
            ;
          

        
         return view('Devolution.detail',["devolution_detail"=>$devolution_detail,"consulta"=>$consulta]);

    }
}
