<?php

namespace App\Models\service_order;

use Illuminate\Database\Eloquent\Model;

class Service_order extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'code',
         'date_order',
         'description',
         'value_to_pay',
         'affiliation_id',
         
        ];


              public function affiliation ()
        {
        
            return $this->belongsTo('App\Models\affiliation\Affiliation');
        
        }


       public function patient_incomes ()
        {
        
            return $this->hasMany('App\Models\patient_income\Patient_income');
        
        }

        public function getdescuentoAttribute()
    {
        return $this->value_to_pay/2;
    }


}
