<?php

namespace App\Models\previous_segmentsleft;

use Illuminate\Database\Eloquent\Model;

class Previous_segmentsleft extends Model
{
    
    

    
     public function Left_eye()
    {
         return $this->hasone('App\Models\left_eye\Left_eye');
    }
}
