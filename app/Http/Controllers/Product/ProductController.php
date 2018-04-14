<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product\Product;
use App\Models\category\Category;
use App\Models\legal_entity\Legal_entity;
class ProductController extends Controller
{

     public function __construct(){/*3.se crea este contruct en el controlador a trabajar*/

        $this->middleware('auth');
        $this->middleware('insert_product', ['only' =>'create']);
        $this->middleware('edit_product', ['only' =>'edit']);
        $this->middleware('elim_product', ['only' =>'detail']);
        
        
       

    }

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('id','DESC')->paginate();
         $consult = Product::where('quantity',0)->
                    count('id');

                     $producto = Product::select('name')->where('quantity',0)->orderBy('id','DESC')->paginate(2000);
        
        return view('admin.products.index')->with(compact('products','consult','producto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

          $person = Category::get()->pluck('name','id')->prepend('selecciona',0);

          $person1 = Legal_entity::get()->pluck('business_name','id')->prepend('selecciona',0);

         
        return view('admin.products.create',["person"=>$person,"person1"=>$person1]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $messages = [

                'name.required' => 'Es necesario colocar un Nombre al producto ',
                'name.min' => 'El nombre debe tener minimo 3 caracteres ',
                'description.required' => 'La descripcion es obligatoria ',
                'price.required' => ' El precio es un campo obligatorio',
                'price.numeric' => ' Solo se pueden digitar numeros en el campo precio',

        ];

        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:3',
            'price' => 'required|numeric|min:0',

        ];

        $this->validate($request, $rules , $messages);

        /*dd($request->all()); ojo con esto imprimes lo que le pasas al metodo*/
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');
        $product->legal_entity_id = $request->input('legal_entity_id');
        $product->save();

        return redirect('/admin/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {    $product = Product::find($id);
        $images = $product->images;

        $imagesLeft = collect();
         $imagesRight = collect();

         foreach ($images as $key => $image) {
             if ($key%2==0) {
                 $imagesLeft->push($image);

             }else{

                $imagesRight->push($image);
             }
         }
        return view('products_detail.show')->with(compact('product','imagesLeft','imagesRight'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        /*return "mostrar el producto con su id $id";*/
        $product = Product::find($id);

        $person = Category::get()->pluck('name','id')->prepend('selecciona',0);
        $person1 = Legal_entity::get()->pluck('business_name','id')->prepend('selecciona',0);

        return view('admin.products.edit')->with(compact('product','person','person1'));
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

             $messages = [

                'name.required' => 'Es necesario colocar un Nombre al producto ',
                'name.min' => 'El nombre debe tener minimo 3 caracteres ',
                'description.required' => 'La descripcion es obligatoria ',
                'price.required' => ' El precio es un campo obligatorio',
                'price.numeric' => ' Solo se pueden digitar numeros en el campo precio',

        ];

        $rules = [
            'name' => 'required|min:3',
            'description' => 'required|max:100',
            'price' => 'required|numeric|min:0',

        ];

        $this->validate($request, $rules , $messages);


         $product =  Product::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->long_description = $request->input('long_description');
        $product->price = $request->input('price');
         $product->quantity = $request->input('quantity');
        $product->category_id = $request->input('category_id');
        $product->legal_entity_id = $request->input('legal_entity_id');
        $product->save();

        return redirect('/admin/products');
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

        return back();
    }


    public function detail($id){

        $productshow = Product::find($id);

         return view('admin.products.detail',["productshow"=>$productshow]);
    }



     public function detail1($id){

        $productshow1 = Product::find($id);

         return view('admin.products.detail1',["productshow1"=>$productshow1]);
    }
}
