<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product\Product;
use DB;
use Session;
class TestController extends Controller
{


    public function __construct(){

        $this->middleware('auth');
        $this->middleware('indx_sales', ['only' =>'index']);
        
        
        
       

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function welcome()
    {
        return view('Product.index');
    }


    public function index()
    {
        
        $products = Product::orderBy('id','DESC')->paginate(12);
       

         
           /* $consult = \DB::table('products')
            ->select( \DB::raw('count(products.id,", ",natural_people.first_name," ",natural_people.second_name," ",natural_people.surname," ",natural_people.second_surname) AS natural_consulta '),'patient_incomes.id')->where('quantity','=','1')*/


            $consult = Product::where('quantity',0)->
                    count('id')
                     ;/*con este cuentas los productos que tengan cero cantidades*/

 $producto = Product::select('name')->where('quantity',0)->orderBy('id','DESC')->paginate(2000);
                        
                        /*if ($producto) {
                            foreach ($producto as $key ) {


                                 Session::flash('error-2',' el producto se ha agotado'.$key->name );
                                
                            }
                           

                            
                        }*/

/* $jj = \DB::table('products')->select('products.name as name' )->where('quantity',0)->orderBy('id','DESC')->paginate(12);*/
                        
                    /* $afiliadosSql = $consult->toSql();
                     dd( $afiliadosSql );*/
        return view('Products.index')->with(compact('products','consult','producto'));
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
        //
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
        $product =  Product::find($id);
 
        $product->delete();

        return redirect('/admin/products');
    }



}
