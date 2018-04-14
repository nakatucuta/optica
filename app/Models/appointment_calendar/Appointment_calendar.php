<?php

namespace App\Models\appointment_calendar;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Carbon\CarbonInterval;
class Appointment_calendar extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'date',
         'time',
         'state_id',
         'affiliation_id',
          'user_id',
         
        ];

        public function state ()
        {
        
            return $this->belongsTo('App\Models\state\State');
        
        }

        
        public function affiliation()
        {
        
            return $this->belongsTo('App\Models\affiliation\Affiliation');
        
        }

        public function user ()
        {
        
            return $this->belongsTo('App\User');
        
        }


          public function patients_income (){

            return $this->hasMany('App\Models\patient_income\Patient_income');
        }


        public function getagescAttribute(){
        
        
      $fechacita = $this->date;/*recibes la cita*/
      $estado = $this->state_id; /*recibes el estado del modelo*/
     /* $horacita = $this->time;*/
        $fechaactual = Carbon::now('America/Bogota');/*tomas la fecha y hora actual de colombia*/
        $fechaactual = $fechaactual->format('Y-m-d');/*aqui le das formato para que solo retorne la fecha*/
        $carbon = Carbon::now()/*->addSeconds(60)*/;/*aqui igual recibes la fecha atual*/
        $horita = $carbon->format('h:i:s');/*aqui le das formato de hora para que solo retorne la hora*/
        $horaactual = $carbon->hour;/*aqui solo tomas la hora*/
        $minutoactual = $carbon->minute;/*aqui el minuto*/
        $horacita = Carbon::parse($this->time)->hour;/*conviertes la hora en un valor entero*/
        $minutocita = Carbon::parse($this->time)->minute;/*conviertes los minutos en un valor entero*/
        
       $resta = $minutoactual - $minutocita;/*aqui restas el minuto actual menos los minutos de la cita si el resultado es mayor qu e 0 entrara al if*/
       
         

            if ($fechacita <= $fechaactual && $horacita <= $horaactual &&  $resta > 0 && $estado == 1) {
          

            return $this->update(['state_id'=>3]);/*asi actualizas con el metodo update sino mira la ultima pagina que pusiste de favorito en chrome en la parte de updates*/

          
            
        }  else {

                $noti = ':';

                return $noti;
                    }
      
        
    }

        

}
