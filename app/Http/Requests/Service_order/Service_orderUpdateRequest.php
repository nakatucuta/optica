<?php

namespace App\Http\Requests\Service_order;

use Illuminate\Foundation\Http\FormRequest;

class Service_orderUpdateRequest extends FormRequest
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
            'code' => 'required',
            'date_order' => 'required',
            'description' => 'required',
            'value_to_pay' => 'required|numeric',
            'affiliation_id'=> 'required',
           

        ];
    }
}
