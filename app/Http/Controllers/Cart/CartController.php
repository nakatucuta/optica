<?php

namespace App\Http\Controllers\Cart;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\cart\Cart;
use Session;
class CartController extends Controller
{


    public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('elim_factura', ['only' =>'show']);
        /*$this->middleware('edit_entity', ['only' =>'edit']);
        $this->middleware('elim_entity', ['only' =>'show']);
        */
        
       
        
       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $cart_show = Cart::find($id);
         
         $consult =\DB::table('carts')->join('cart_details','carts.id','=','cart_details.cart_id')
        ->join('natural_people','carts.natural_people_id','=','natural_people.id')
        ->select(\DB::raw('count(cart_details.product_id) as conteo, carts.id , natural_people.first_name, natural_people.second_name,natural_people.surname, natural_people.second_surname'))
                     
                     ->groupBy('carts.id','natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname')

            
            ->where('carts.id','=',$id)/*ojo este hace que funcone*/
            ->first();
            ;
         
          

        
         return view('details_venta.show_eliminar',["cart_show"=>$cart_show,"consult"=>$consult]);
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
    public function update(Request $request)
    {
        $cart = auth()->user()->cart;
        $cart->status = 'Finalizada';
        $cart->natural_people_id = $request->natural_people_id;
         $cart->paid_value = $request->paid_value;

         
             if ($request->paid_value > $cart->Total) {
                 
                  $notification = 'El Valor Pagado Es Mayor Que EL Valor A Pagar' ;
                    return back()->with(compact('notification'));
             }

         



        $cart->save(); /*ojo video 59 usas lo de cambios de estados*/
        $notification = 'Has finalizado la compra....!';
        return back()->with(compact('notification'));
/*return redirect('/admin/products')->with(compact('notification'));*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
                $cart_destroy = Cart::find($id);
        
                $cart_destroy->delete();
                Session::flash('delete','El registro se ha eliminado correctamente');
                return redirect('/cart');
    }
}
