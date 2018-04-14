<?php

namespace App\Models\formula;

use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{

	public function product ()
        {
        
            return $this->belongsTo('App\Models\product\Product');
        
        }

     public function diagnostics()
    {
    	 return $this->hasMany('App\Models\diagnostic\Diagnostic');
    }


}
