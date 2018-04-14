<?php

namespace App\Models\cartdetail;

use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    public function product(){


    		return $this->belongsTo('App\Models\product\Product');

    }



    public function cart(){

    		return $this->belongsTo('App\Models\cart\Cart');

    }


     public function getsumaAttribute(){

      $sum1 = $this->quantity * $this->product->sum('price');
     
        return $sum1;

     }



     /*public function getojoAttribute(){

      foreach ($this->cart->devolutions as $key) {
        if ($key->product->id == $this->cart->devolutions->product->id) {
           $ver = $key->quantity;
        }

       
      
      }


      return $ver;
      

     }*/
}
