<?php

namespace App\Models\identification_description;

use Illuminate\Database\Eloquent\Model;

class Identification_description extends Model
{
        protected $primaryKey = 'id';
    protected $fillable = [
       'name_identification' 
        ];



        
     public function natural_persons()
     {
     
         return $this->hasMany('App\Models\natural_person\Natural_person');
     
     }
}
