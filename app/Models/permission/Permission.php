<?php

namespace App\Models\permission;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public function user()
    {
    
        return $this->belongsTo('App\User');
    
    }
    

 public function permission_serventitie()
        {
             return $this->hasOne('App\Models\permission_serventity\Permission_serventity');
        }

    
}
