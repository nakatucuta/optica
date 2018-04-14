<?php

namespace App\Models\gender;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
      protected $primaryKey = 'id';
    protected $fillable = [
       'name_gender' 
        ];



        
     public function natural_people ()
     {
     
         return $this->hasMany('App\Models\natural_person\Natural_person');
     
     }

     /*ojo los nombres de las relaciones en plural y con el nombre de la tabla */
}
