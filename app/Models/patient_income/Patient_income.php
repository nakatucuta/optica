<?php

namespace App\Models\patient_income;

use Illuminate\Database\Eloquent\Model;

class Patient_income extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'description_income',
         'companion',
         'companion_phone_number',
         'kinship',
         'responsible',
         'phone_responsible',
         'relationship_resposible',
         'appointment_calendar_id',
         'service_id',
         'service_order_id',
         
        ];


        


       public function appointment_calendar()
        {
        
            return $this->belongsTo('App\Models\appointment_calendar\Appointment_calendar');
        
        }


       public function service ()
        {
        
            return $this->belongsTo('App\Models\service\Service');
        
        }


       public function service_order ()
        {
        
            return $this->belongsTo('App\Models\service_order\Service_order');
        
        }


    

       public function diagnostics()
     {
     
         return $this->hasOne('App\Models\diagnostic\Diagnostic');
     
     }

     public function getdescuentoAttribute()
    {
        return $this->state_id = 3;
    }

}
