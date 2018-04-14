<?php

namespace App\Models\diagnostic;

use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        
         'patient_income_id',
         'left_eye_id',
         'right_eye_id',
         'previous_segment_id',
         'Rear_segment_id',
         'Observation_id',
     ];


      public function patient_income ()
        {
        
            return $this->belongsTo('App\Models\patient_income\Patient_income');
        
        }


         public function left_eye ()
        {
        
            return $this->belongsTo('App\Models\left_eye\Left_eye');
        
        }

         public function right_eye ()
        {
        
            return $this->belongsTo('App\Models\right_eye\Right_eye');
        
        }

        


         public function rear_segment ()
        {
        
            return $this->belongsTo('App\Models\rear_segment\Rear_segment');
        
        }


         public function observation ()
        {
        
            return $this->belongsTo('App\Models\observation\Observation');
        
        }

           public function medicals_records ()
     {
     
         return $this->hasMany('App\Models\medical_record\Medical_record');
     
     }


     public function formula()
        {
        
            return $this->belongsTo('App\Models\formula\Formula');
        
        }

      public function getagesAttribute(){
        
        
      $edad = Carbon::parse($this->ojo)->age; 
        
        

      return $edad;
         
    }

     
}
