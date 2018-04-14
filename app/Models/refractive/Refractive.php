<?php

namespace App\Models\refractive;

use Illuminate\Database\Eloquent\Model;

class Refractive extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'near',
         'nea_r',
         'ne_ar',
        
         
        ];


         public function rigth_eyes ()
        {
        
            return $this->hasone('App\Models\right_eye\Right_eye');
        
        }

          
}
