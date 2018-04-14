<?php

namespace App\Models\cart;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function user ()
        {
        
            return $this->belongsTo('App\User');
        
        }


        public function details(){

        	return $this->hasMany('App\Models\cartdetail\CartDetail');
        }


         public function natutral_person()
        {
        
            return $this->belongsTo('App\Models\natural_person\Natural_person');
        
        }


        public function devolutions(){

            return $this->hasMany('App\Models\devolution\Devolution');
        }


        public function credits(){

            return $this->hasMany('App\Models\credit\Credit');
        }


         public function getTotalAttribute()
    {
    	$total = 0;
    	foreach ($this->details as $detail) {
    		$total += $detail->quantity * $detail->product->price;
    	}
    	return $total;
    }



    public function getTotaldevAttribute(){

        $total = 0;
        foreach ($this->devolutions as $detail) {
            $total += $detail->quantity * $detail->product->price;
        }
        return $total;
        
    }



    public function getCantdevAttribute(){

         $total = 0;
        foreach ($this->devolutions as $detail) {
            $total +=  $this->details->product->quantity - $detail->quantity;
        }
        return $total;

    }



     public function getSumabnAttribute(){

         $total = 0;
        foreach ($this->credits as $detail) {
            $total += $detail->value;
        }
        return $total;

    }

     
    public function getDevrestAttribute(){

        foreach ($this->devolutions as $key) {
            $var = $key->quantity;
        }


        return $var;
    }    

   
}
