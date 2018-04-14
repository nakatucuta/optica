<?php

namespace App\Models\credit;

use Illuminate\Database\Eloquent\Model;

class Credit extends Model
{
    
    public function cart()
        {
        
            return $this->belongsTo('App\Models\cart\Cart');
        
        }


        public function user()
        {
        
            return $this->belongsTo('App\User');
        
        }


       
}
