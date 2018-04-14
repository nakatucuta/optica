<?php

namespace App\Models\devolution;

use Illuminate\Database\Eloquent\Model;

class Devolution extends Model
{
    

	 public function product()
        {
        
            return $this->belongsTo('App\Models\product\Product');
        
        }


        public function natural_people ()
        {
        
            return $this->belongsTo('App\Models\natural_person\Natural_person');
        
        }


        public function user()
        {
        
            return $this->belongsTo('App\User');
        
        }


         public function cart()
        {
        
            return $this->belongsTo('App\Models\cart\Cart');
        
        }


        public function getestaAttribute(){


                foreach ($this->cart->details as $key) {
                    
                    if ($this->quantity > $key->quantity) {
                             $notification = 'esta cantidad es mayor' ;
                   return $notification;
                        }    

                }



               

        }



}
