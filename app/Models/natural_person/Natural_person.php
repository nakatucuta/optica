<?php

namespace App\Models\natural_person;

use Illuminate\Database\Eloquent\Model;
use Carbon;

class Natural_person extends Model
{
    
    protected $fillable = [
       'identification_description_id' ,
       'identification',
       'first_name',
        'second_name',
         'surname',
         'second_surname',
         'date_of_birth',
         'phone_number',
         'occupation',
         'genders_id',
         'email',
         'address',
         'image',
        ];



        
    public function gender()
        {
        
            return $this->belongsTo('App\Models\gender\Gender');
        
        }

          public function identification_description()
        {
        
            return $this->belongsTo('App\Models\identification_description\Identification_description');
        
        }

        public function affiliations()
        {

            return $this->hasMany('App\Models\affiliation\Affiliation');
        }


         public function carts(){

            return $this->hasMany('App\Models\cart\Cart');
        }

        public function devolutions()
    {
         return $this->hasMany('App\Models\devolution\Devolution');
    }


         public function getagesAttribute(){
        
        
      $edad = $this->created_at; 
        $nn = Carbon::now(); 
        if ($edad>$nn) {
            return $edad;
        }else{

            $notification = 'Has finalizado la compra....!';

            return $notification;
        }

      
        
    }

    public function getdescuentoAttribute()
    {
        return $this->identifi+100;
    }


}
