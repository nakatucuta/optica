<?php

namespace App\Http\Requests\Legalentity;

use Illuminate\Foundation\Http\FormRequest;

class EntytiCreateRequest extends FormRequest
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
            'business_name' => 'required|min:3|unique:legal_entities,business_name',/*ojo aqui se trabaja con el nombre de la migracion*/
            'nit' => 'required|numeric|unique:legal_entities,nit',
            'adress' => 'required',
            'social_object' => 'required',
            'Postal_Code'=> 'required',
            'email'=> 'required',
            'phone_number'=> 'required',

        ];
    }

    public function messages()
    {
        return[
            'business_name.min'=>'Nombre de contener al menos 3 caracteres', /*asi se personalisan los mensajes flah*/
            'business_name.unique'=>'El Nombre ya esta regitrado',
            'nit.numeric' => 'NIT solo se permiten numeros',
            'nit.unique' => 'NIT ya esta registrado'
        ];
        

    }
}
