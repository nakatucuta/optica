<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'name_service',
         'value_service',
         'type_service_id',
         
        ];


          public function patient_incomes ()
        {
        
            return $this->hasMany('App\Models\patient_income\Patient_income');
        
        }


       public function type_service ()
        {
        
            return $this->belongsTo('App\Models\type_service\Type_service');
        
        }

   
}
