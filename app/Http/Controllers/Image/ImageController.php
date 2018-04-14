<?php

namespace App\Http\Controllers\Image;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product\Product;
use App\Models\productImage\ProductImage;
use File;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $product = Product::find($id);
        /*dd($product->name);*/
        $images  = $product->images()->orderBy('featured', 'desc')->get();
        return view('admin.products.images.index')->with(compact('product','images'));
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
    public function store(Request $request , $id)
    {
        /*guardar imagen en nuestro proyecto*/
        $file = $request->file('photo');/*obtiene lo que se este enviando a traves de un campo con  el name que tenga*/
        $path = public_path() . '/images/products'; /*es la ruta donde se va aguardar la imagen en la crp public */
        $fileName = uniqid() . $file->getClientOriginalName();/*nombre para el archivo que esta subiendo el usuario este concatena un id unico al subirlo al servidor*/
         $moved = $file->move($path, $fileName);/* darle la orden para que se guarde*/

         if ($moved) {

                /*crear un registro en la tabla product_images*/

        $productImage = new ProductImage();
        $productImage->image = $fileName;
        /*$productImage->featured = false;*/
        $productImage->product_id = $id;
        $productImage->save();/*insert*/
             
         }

    /*la condicion es para validar si el registro se guarda que lo haga igual en la bd video 46*/
        return back();
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
    public function destroy(Request $request, $id)
    {
        /*1. eliminar el archivo en la carpeta*/

        $productImage = ProductImage::find($request->image_id);

        if (substr($productImage->image,0 , 4) === "http") {

            $delete = true;
           
        } 
        else {

                 $fullPath = public_path() . '/images/products/' . $productImage->image;
            $delete = File::delete($fullPath);


        }


        /*eliminar el registro en la base de datos*/

        if ($delete) {
            $productImage->delete();
        }

        return back();
    }



    public function select($id, $image ){


            ProductImage::where('product_id', $id)->update([

                    'featured' => false
            ]);


        $productImage = ProductImage::find($image);

        $productImage->featured = true;

         $productImage->save();

         return back();
    }
}
