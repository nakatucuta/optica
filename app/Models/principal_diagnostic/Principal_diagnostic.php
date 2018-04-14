<?php

namespace App\Models\principal_diagnostic;

use Illuminate\Database\Eloquent\Model;

class Principal_diagnostic extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'code',
         'name',
     ];

      public function rear_segment ()
     {
     
         return $this->hasMany('App\Models\rear_segment\Rear_segment');
     
     }
}
