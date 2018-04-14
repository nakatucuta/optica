<?php

namespace App\Models\affiliation;

use Illuminate\Database\Eloquent\Model;

class Affiliation extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
           'natural_person_id','legal_entity_id',
        ];



         public function natural_person ()
        {
        
            return $this->belongsTo('App\Models\natural_person\Natural_person');
        
        }
        
        public function legal_entity ()
        {
        
            return $this->belongsTo('App\Models\legal_entity\Legal_entity');
        
        }


        public function appointment_calendars ()
        {
        
            return $this->hasMany('App\Models\appointment_calendar\Appointment_calendar');
        
        }


         public function service_orders ()
        {
        
            return $this->hasMany('App\Models\service_order\Service_order');
        
        }


           public function diagnostics ()
        {
        
            return $this->hasMany('App\Models\diagnostic\Diagnostic');
        
        }

        
}
