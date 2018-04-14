<?php

namespace App\Models\type_service;

use Illuminate\Database\Eloquent\Model;

class Type_service extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
       'type_service' 
        ];



        
     public function services ()
     {
     
         return $this->hasMany('App\Models\service\Service');
     
     }
     
}
