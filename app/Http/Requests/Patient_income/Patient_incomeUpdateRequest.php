<?php

namespace App\Http\Requests\Patient_income;

use Illuminate\Foundation\Http\FormRequest;

class Patient_incomeUpdateRequest extends FormRequest
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

            'description_income' => 'required',
           'companion' => 'required',
           'companion_phone_number'=> 'required',
           'kinship'=> 'required',
            'responsible'=> 'required',
            'phone_responsible'=> 'required',
            'relationship_resposible'=> 'required',
            'appointment_calendar_id'=> 'required|numeric',
            'service_id'=> 'required',
            'service_order_id'=> 'required',
            
        ];
    }
}
