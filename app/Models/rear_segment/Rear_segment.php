<?php

namespace App\Models\rear_segment;

use Illuminate\Database\Eloquent\Model;

class Rear_segment extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
        
         'conducta',
         'principal_diagnostic_id',
         'diagnóstico_rela',
         
         'ultimo_ontrol',
         'próximo_control',
     ];


      public function diagnostic ()
        {
        
            return $this->hasone('App\Models\diagnostic\Diagnostic');
        
        }

         public function principal_diagnostic ()
        {
        
            return $this->belongsTo('App\Models\principal_diagnostic\Principal_diagnostic');
        
        }
}
