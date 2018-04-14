<?php

namespace App\Models\left_eye;

use Illuminate\Database\Eloquent\Model;

class Left_eye extends Model
{
     protected $primaryKey = 'id';
    protected $fillable = [
        'external_examinationl',
         'rx_en_uso_ml',
         'rx_en_uso_lcl',
         'av_sin_rx_lejl',
         'av_con_rx_m_lejl',
         'av_con_rx_l_lejl',
         'queratometríal',
         'refracciónl',
         'sub_s_ciclopejial',
         'ref_c_ciclopejial',
         'sub_c_ciclopejial',
         'rx_finall',
         'avfll',
         'refractive_id'

         
        ];




     public function refractive ()
        {
        
            return $this->belongsTo('App\Models\refractive_lefteye\Refractive_lefteye');
        
        }

        public function diagnostic ()
        {
        
            return $this->hasone('App\Models\diagnostic\Diagnostic');
        
        }


        public function Previous_segmentsleft()
        {
        
            return $this->belongsTo('App\Models\previous_segmentsleft\Previous_segmentsleft');
        
        }
}
