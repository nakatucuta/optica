<?php

namespace App\Models\category;

use Illuminate\Database\Eloquent\Model;



class Category extends Model
{
    


        


         public function products()
        {
        
            return $this->hasMany('App\Models\product\Product');
        
        }


        

}
