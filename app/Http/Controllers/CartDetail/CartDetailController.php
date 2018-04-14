<?php

namespace App\Http\Controllers\CartDetail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\cartdetail\CartDetail;
use App\Models\natural_person\Natural_person;
use App\Models\product\Product;
use App\Models\cart\Cart;
use Session;
class CartDetailController extends Controller
{



   public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_factura', ['only' =>'facturaPDF']);
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

        $details = CartDetail::orderBy('id','DESC')->paginate();

        $consult =\DB::table('carts')->join('cart_details','carts.id','=','cart_details.cart_id')
        ->join('natural_people','carts.natural_people_id','=','natural_people.id')
        ->select(\DB::raw('count(cart_details.product_id) as conteo, carts.id , natural_people.first_name, natural_people.second_name,natural_people.surname, natural_people.second_surname'))
                     
                     ->groupBy('carts.id','natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname')
                     ->orderBy('id','DESC')->paginate();



                    
        
        

       return view('details_venta.index')->with(compact('details','consult'));
    
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

        $cartDetail = new CartDetail();
        $cartDetail->cart_id = auth()->user()->cart->id ;
        $cartDetail->product_id = $request->product_id;
        $cartDetail->quantity = $request->quantity;

            if ($request->quantity > $cartDetail->product->quantity) {
            $noti_validacion = 'no  se puede vender una cantidad mayor a la existente';
            
            /* Session::flash('error-carrito','La Cantidad Ingresada es mayor a las cantidades disponibles del producto'.' '. $cartDetail->product->name.' '.' intentar nuevamente');*/
            
           /* return redirect('home');*/

           return back()->with(compact('noti_validacion'));


            }


            if ($request->quantity < 0) {
                /* Session::flash('error-carrito','No Ingrese Numeros negativos intentar nuevamente'.$cartDetail->quantity);*/

                  $noti_validacion = 'no  se puede vender una cantidad negativa';
            
           

           return back()->with(compact('noti_validacion'));
            
            /*return redirect('home');*/

            }



                $detail = CartDetail::where('cart_id', auth()->user()->cart->id)
                 ->where('product_id', $request->product_id)->first();
                    if ($detail) {
                          $noti_validacion = 'no puede agregar este prouducto ya esta en el carrito';
            
           /*esta consulta lo que hace es que mientras que haya un id de un producto en un carrito de compras activo por un usuario o si el product que se intenta ingresar por request ya esta en un carrito de compras activo que envie el mensaje que le mando*/

           return back()->with(compact('noti_validacion'));
                    }


       $cartDetail->save(); 

       /*if ($cartDetail) {

           $op =  $cartDetail->product->quantity - $request->quantity;

          

            

           Product::where('quantity','>','0')
           ->update(['quantity'=>$op]);
       }*/
       $notification_save_carrito = 'El producto se ha cargado a tu carrito de compras exitosamente!';
       return redirect('home')->with(compact('notification_save_carrito'));
              /*    Session::flash('save','El registro se ha creado y guardado correctamente');
        return redirect('home');*/
        /*return redirect('home');*/
        /*$notification = 'El producto se ha cargado en  tu carrito de compras exitosamente..!';*/
       /*->with(compact('notification'))*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cart =  Cart::find($id);


        
       


        return view('details_venta.show')->with(compact('cart'));
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
    public function destroy(Request $request)
    {
         $cartDetail =  CartDetail::find($request->cart_detail_id);
       if ($cartDetail->cart_id == auth()->user()->cart->id) 
           $cartDetail->delete();


       /* if ($cartDetail) {

           $op =  $cartDetail->product->quantity + $cartDetail->quantity;

          

            

           $cartDetail->where('quantity','>','0')
           ->update(['quantity'=>$op]);
       }*/
       
       $notification = 'El producto se ha eliminado del carrito de compras correctamente.';
        return back()->with(compact('notification'));
      
        
    }



    public function facturaPDF($id){


       $cart =  Cart::find($id);

       $consulta =\DB::table('carts')->select('natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname','natural_people.identification')
        ->join('natural_people','carts.natural_people_id','=','natural_people.id')

            
            ->where('carts.id','=',$id)/*ojo este hace que funcone*/
            ->first();
            ;



          /*  $consulta1 =\DB::table('carts')->select('natural_people.first_name','natural_people.second_name','natural_people.surname','natural_people.second_surname','natural_people.identification')
        ->join('devolutions','carts.id','=','devolutions.cart_id')
        ->join('products','devolutions.product_id','=','products.id')

            
            ->where('carts.id','=',$id)/*ojo este hace que funcone
            ->first();
            ;*/


        $pdf = \App::make('dompdf.wrapper');
    $pdf = \PDF::loadView('details_venta.reports.facturaPDF',['cart'=>$cart,'consulta'=>$consulta]);
    return $pdf->stream('Entradas.pdf');

       


        



    }
}
