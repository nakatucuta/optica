<?php

namespace App\Models\medical_record;

use Illuminate\Database\Eloquent\Model;

class Medical_record extends Model
{
    protected $primaryKey = 'id';
    protected $fillable = [
       
       'description',
       'past_surgical_history',
        'antecedents',
         
         'diagnostic_id',
         
        ];

        

           public function diagnostig ()
        {
        
            return $this->belongsTo('App\Models\diagnostic\Diagnostic');
        
        }
}
