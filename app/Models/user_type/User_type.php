<?php

namespace App\Models\user_type;

use Illuminate\Database\Eloquent\Model;

class User_type extends Model
{
    
	  protected $primaryKey = 'id';
    protected $fillable = [
       'type_name' 
        ];



        
     public function Users ()
     {
     
         return $this->hasMany('App\User');
     
     }

    
}
