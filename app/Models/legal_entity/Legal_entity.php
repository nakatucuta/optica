<?php

namespace App\Models\legal_entity;

use Illuminate\Database\Eloquent\Model;

class Legal_entity extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'business_name',
         'nit',
         'adress',
         'social_object',
          'Postal_Code',
          'email',
          'phone_number',
          'entity_types_id',
        ];


        public function affiliations ()
        {
        
            return $this->hasMany('App\Models\affiliation\Affiliation');
        
        }


        public function entity_type()
        {
        
            return $this->belongsTo('App\Models\entity_type\Entity_type');
        
        }

        public function products(){
            return $this->hasMany('App\Models\product\Product');

    }
}
