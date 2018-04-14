<?php

namespace App\Models\previous_segment;

use Illuminate\Database\Eloquent\Model;

class Previous_segment extends Model
{
      protected $primaryKey = 'id';
    protected $fillable = [
        /*'motilidad_ocular',*/
         'previous_segments',
         'parpado',
         'vías_lagrimales',
         'sensib_contraste',
         'pupila',
         'tipo_sch',
         'apl',
         'tonometría',
         'l_intraoculares',
         'biomicroscopía',
         'test_color',
         't_estereopsis',
         'resultado',

         
        ];


         public function right_eye()
    {
         return $this->hasone('App\Models\right_eye\Right_eye');
    }
}
