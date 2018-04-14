<?php

namespace App\Models\right_eye;

use Illuminate\Database\Eloquent\Model;

class Right_eye extends Model
{


   protected $primaryKey = 'id';
    protected $fillable = [
        'external_examination',
         'rx_en_uso_m',
         'rx_en_uso_lc',
         'av_sin_rx_lej',
         'av_con_rx_m_lej',
         'av_con_rx_l_lej',
         'queratometría',
         'refracción',
         'sub_s_ciclopejia',
         'ref_c_ciclopejia',
         'sub_c_ciclopejia',
         'rx_final',
         'avfl',
         'refractive_id'

         
        ];




     public function refractive ()
        {
        
            return $this->belongsTo('App\Models\refractive\Refractive');
        
        }
         public function diagnostic ()
        {
        
            return $this->hasone('App\Models\diagnostic\Diagnostic');
        
        }


        public function previus_segment ()
        {
        
            return $this->belongsTo('App\Models\previous_segment\Previous_segment');
        
        }
}
