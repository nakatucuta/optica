<?php

namespace App\Models\permission_serventity;

use Illuminate\Database\Eloquent\Model;

class Permission_serventity extends Model
{
   public function permission()
        {
             return $this->belongsTo('App\Models\permission\Permission');
        }
}
