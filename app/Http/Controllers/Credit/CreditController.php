<?php

namespace App\Http\Controllers\Credit;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\credit\Credit;
use Session;
class CreditController extends Controller
{





    public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_abonos', ['only' =>'create']);
        $this->middleware('edit_abonos', ['only' =>'edit']);
        $this->middleware('elim_abonos', ['only' =>'show']);
    
        
        
       
        
       

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credits = Credit::orderBy('id','DESC')->paginate();
         return view('Credit.index')->with(compact('credits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {



        $factura = \DB::table('carts')->where('carts.status','=','Finalizada')/*->whereNotIn('carts.id', function($q){
    $q->select('cart_id')->from('devolutions');
        })*/
            ->select( \DB::raw('CONCAT(carts.id,", ",carts.created_at) AS factura' ),'carts.id');
            



            $person2 = $factura->get()->pluck('factura','id')->prepend('selecciona',0);



            $empleado = \DB::table('users')
            ->select( \DB::raw('CONCAT(users.id,", ",users.name) AS empleado' ),'users.id');
            



            $person3 = $empleado->get()->pluck('empleado','id')->prepend('selecciona',0);



            return view('Credit.create',["person2"=>$person2,"person3"=>$person3]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $credit_store = new Credit;
        $credit_store->date = $request->date;
        $credit_store->cart_id = $request->cart_id;
        $credit_store->value = $request->value;
        $credit_store->user_id = auth()->user()->id;
       

        if ($request->value > ($credit_store->cart->Total - $credit_store->cart->paid_value - $credit_store->cart->Sumabn) - $credit_store->cart->Totaldev) {
            $noti_validacion = 'El valor es mayor a la deuda' ;
            return back()->with(compact('noti_validacion'));
        }
         $credit_store->save();
        Session::flash('save','Los registros han sido guardados correctamente');
        return redirect()->route('credit.index');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $credit_show = Credit::find($id);
         return view('Credit.show',["credit_show"=>$credit_show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {       

         $credit_edit = Credit::find($id);
         $factura = \DB::table('carts')->where('carts.status','=','Finalizada')
            ->select( \DB::raw('CONCAT(carts.id,", ",carts.created_at) AS factura' ),'carts.id');
            



            $person2 = $factura->get()->pluck('factura','id')->prepend('selecciona',0);



            $empleado = \DB::table('users')
            ->select( \DB::raw('CONCAT(users.id,", ",users.name) AS empleado' ),'users.id');
            



            $person3 = $empleado->get()->pluck('empleado','id')->prepend('selecciona',0);



            return view('Credit.edit',["person2"=>$person2,"person3"=>$person3,"credit_edit"=>$credit_edit]);
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
        $citaedit = Credit::FindOrFail($id);
         $citaedit->date = $request->date;
            $citaedit->cart_id = $request->cart_id;
            $citaedit->value = $request->value;
            $citaedit->user_id = $request->user_id;
                   

                $citaedit->save();  
        Session::flash('update','El registro se ha actualizado correctamente');
                
                 return redirect()->route('credit.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $devolutiondestroy = Credit::find($id);
        
                $devolutiondestroy->delete();
                Session::flash('delete','El registro se ha eliminado correctamente');
                return redirect()->route('credit.index');
    }



    public function detail($id){


        $credit_detail = Credit::find($id);

          return view('Credit.detail',["credit_detail"=>$credit_detail]);

    }
}
