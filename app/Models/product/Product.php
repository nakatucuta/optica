<?php

namespace App\Models\product;

use Illuminate\Database\Eloquent\Model;
use Session;

class Product extends Model
{

    public function category()
    {

    	return $this->belongsTo('App\Models\category\Category');
    }


    public function images()
    {
    	 return $this->hasMany('App\Models\productImage\ProductImage');
    }


    public function devolutions()
    {
         return $this->hasMany('App\Models\devolution\Devolution');
    }


    public function cart_details(){
            return $this->hasMany('App\Models\cartdetail\CartDetail');

    }

    public function legal_entity ()
        {
        
            return $this->belongsTo('App\Models\legal_entity\Legal_entity');
        
        }


         public function formulas()
    {
         return $this->hasMany('App\Models\formula\Formula');
    }


   /* public function getdescuentoAttribute()
    {   $h = 0;
    	if ($this->quantity == 0) 
    	{
            $h++;
            $j= $h+$h;
             Session::flash('error-2',' el producto'.' '.$this->name.' '.  'se ha agotado'.$j );
          /* return $this->delete();*//*lo hace por cada fila
    		
    		

    	}
        
    }*/


    public function getFeaturedImageUrlAttribute(){

        /*ojo la informacion de todo esto esta en el video 47*/


        /*se obtiene la imagen descatada */
        $featuredImage = $this->images()->where('featured', true)->first();
        /*en caso qu eno tenga imagen destacada el asocia la primera que ecuentre asociada al producto*/
        if (!$featuredImage)
            $featuredImage = $this->images()->first();

        if ($featuredImage){

                    /*aqui es si encuentra una imagen asociada la devuelve el url*/
                 return $featuredImage->url;

        }

           
        /*devolver la imagen por defecto si no se cumple ninguna condicion*/
        return '/images/products/default.png';


    }
}
  