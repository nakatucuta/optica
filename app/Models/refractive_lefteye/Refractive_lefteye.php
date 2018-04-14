<?php

namespace App\Models\refractive_lefteye;

use Illuminate\Database\Eloquent\Model;

class Refractive_lefteye extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'nearl',
         'nea_rl',
         'ne_arl',
        
         
        ];


         public function rigth_eyes ()
        {
        
            return $this->hasone('App\Models\left_eye\Left_eye');
        
        }
}
