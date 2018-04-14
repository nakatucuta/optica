<?php

namespace App\Models\observation;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        'aca',
         'cover_test',
         'ppc',
         'afc',
         'ojo_dte',
     ];

      public function diagnostic ()
        {
        
            return $this->hasone('App\Models\diagnostic\Diagnostic');
        
        }
}
