<?php

namespace App\Models\state;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
       'name' 
        ];



        
     public function appointment_calendars ()
     {
     
         return $this->hasMany('App\Models\appointment_calendar\Appointment_calendar');
     
     }

}
