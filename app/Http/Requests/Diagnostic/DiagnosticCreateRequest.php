<?php

namespace App\Http\Requests\Diagnostic;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\left_eye\Left_eye;
use App\Models\observation\Observation;
use App\Models\previous_segment\Previous_segment;
use App\Models\rear_segment\Rear_segment;
use App\Models\refractive\Refractive;
use App\Models\right_eye\Right_eye;
use App\Models\medical_record\Medical_record;
use App\Models\principal_diagnostic\Principal_diagnostic;
use App\Models\affiliation\Affiliation;
use App\Models\patient_income\Patient_income;
use App\Models\refractive_lefteye\Refractive_lefteye;
class DiagnosticCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
           
        'ph_lejos'=> 'required',
         'ph_cerca'=> 'required',
         
          'ph_lejos'=> 'required',
         'ph_cerca'=> 'required', 
         'external_examination'=> 'required',
         'rx_en_uso_m'=> 'required',
         'rx_en_uso_lc'=> 'required',
         'av_sin_rx_lej'=> 'required',
         'av_con_rx_m_lej'=> 'required',
         'av_sin_rx_cerca'=> 'required',
         'av_con_rx_m_cerca' => 'required',
         'queratometría'=> 'required',
         'refracción'=> 'required',
         'sub_s_ciclopejia'=> 'required',
         'ref_c_ciclopejia'=> 'required',
         'sub_c_ciclopejia'=> 'required',
         'rx_final'=> 'required',
         'avfl'=> 'required',
         
         'external_examinationl'=> 'required',
         'rx_en_uso_ml'=> 'required',
         'rx_en_uso_lcl'=> 'required',
         'av_sin_rx_lejl'=> 'required',
         'av_con_rx_m_lejl'=> 'required',
         'av_sin_rx_cerca'=> 'required',
         'av_con_rx_m_cerca' => 'required',
         'queratometríal'=> 'required',
         'refracciónl'=> 'required',
         'sub_s_ciclopejial'=> 'required',
         'ref_c_ciclopejial'=> 'required',
         'sub_c_ciclopejial'=> 'required',
         'rx_finall'=> 'required',
         'avfll'=> 'required',
        
         'aca'=> 'required',
         'cover_test'=> 'required',
         'ppc'=> 'required',
         'afc'=> 'required',
         'ojo_dte'=> 'required',
          'motilidad_ocular'=> 'required',
         'previous_segments'=> 'required',
         'parpado'=> 'required',
         'vías_lagrimales'=> 'required',
         'sensib_contraste'=> 'required',
         'pupila'=> 'required',
         'tipo_sch'=> 'required',
         'apl'=> 'required',
         'tonometría'=> 'required',
         'l_intraoculares'=> 'required',
         'biomicroscopía'=> 'required',
         'test_color'=> 'required',
         't_estereopsis'=> 'required',
         'resultado'=> 'required',
          
         'conducta'=> 'required',
         
         'diagnóstico_rela'=> 'required',
         
         'ultimo_ontrol'=> 'required',
         'próximo_control'=> 'required',
        
         
         'description'=> 'required',
       'past_surgical_history'=> 'required',
        'antecedents'=> 'required',
        ];
    }
}
