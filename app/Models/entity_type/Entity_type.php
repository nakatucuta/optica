<?php

namespace App\Models\entity_type;

use Illuminate\Database\Eloquent\Model;

class Entity_type extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
       'code',
       'name_type', 
        ];



        
     public function legal_entities()
     {
     
         return $this->hasMany('App\Models\legal_entity\Legal_entity');
     
     }

}
