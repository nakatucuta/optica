<?php

namespace App\Http\Requests\Affiliation;

use Illuminate\Foundation\Http\FormRequest;

class AffiliationCreateRequest extends FormRequest
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
            'natural_person_id' => 'required',
            'legal_entity_id'=> 'required',
        ];
    }
}
