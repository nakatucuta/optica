<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $person3 = \DB::table('products')
            ->select( \DB::raw('SUM(cart_details.quantity * products.price) AS suma ') )->where('carts.status','=','Active')
            
            ->join('cart_details','products.id','=','cart_details.product_id')
            ->join('carts','cart_details.cart_id','=','carts.id')
            
                
            
            /*        $afiliadosSql = $person3->toSql();
            dd( $afiliadosSql );*/
            ->get();


            /* $consult = Product::where('carts.status','Active')

            ->join('cart_details','products.id','=','cart_details.product_id')
            ->join('carts','cart_details.cart_id','=','carts.id')
                    ->sum($sum1);*/

         $citaconsulta = \DB::table('natural_people')/*->where('appointment_calendars.state_id','=','1')*/
            ->select( \DB::raw('CONCAT(natural_people.identification,", ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname) AS citaconsulta '),'natural_people.id');

            /*     $afiliadosSql = $citaconsulta->toSql();
            dd( $afiliadosSql );*/
             $person = $citaconsulta->get()->pluck('citaconsulta','id')->prepend('selecciona',0);

         return view('home',["person"=>$person,"person3"=>$person3]);
    }
}
