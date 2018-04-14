<?php

namespace App\Http\Controllers\Search;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product\Product;

class SearchController extends Controller
{
    
	public function show(Request $request)
    {	
    	$query = $request->input('query');
    	$products = Product::where('name', 'like', "%$query%")->paginate(5);
    	
    	/*if ($products->count() == 1) {
    		$id = $products->first()->id;
    		return redirect("products/$id"); // 'products/'.$id
    	}*/

    	return view('search.show')->with(compact('products', 'query'));
    }



    public function data()
    {
    	$products = Product::pluck('name');
    	return $products;

    	/*$products = Product::select( \DB::raw('CONCAT(products.name," ",products.quantity) AS afiliation_consulta '),'products.name')->pluck('afiliation_consulta');*/
    }


}
