<?php

namespace App\Models\productImage;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{

    public function product()
    {

    	return $this->belongsTo('App\Models\product\Product');
    }
/*accesor*/

   	public function getUrlAttribute()
   	{

   		if (substr($this->image,0 , 4) === "http") {

   			return $this->image;
   		}


   		return '/images/products/' . $this->image;

   	}


}
