<?php

namespace App\Http\Requests\Natural_person;

use Illuminate\Foundation\Http\FormRequest;

class Natural_personCreateRequest extends FormRequest
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
             'identification_description_id' => 'required',
           'identification' => 'required|min:8|unique:natural_people,identification',
           'first_name'=> 'required',
           'second_name'=> 'required',
            'surname'=> 'required',
            'second_surname'=> 'required',
            'date_of_birth'=> 'required',
            'phone_number'=> 'required|numeric',
            'occupation'=> 'required',
            'genders_id'=> 'required',
            'email'=>'required',
            'address'=> 'required',
            'image'=>'required',

        ];
    }



     public function messages()
    {
        return[
            'identification.min'=>'identificasion debe contener al menos 8 numeros', /*asi se personalisan los mensajes flah*/
            'identification.unique'=>'la identificasion ya esta regitrada',
            'phone_number.numeric' => 'solo se admiten numeros en el campo Numero telefono',
            'identification.numeric'=>'solo se puede ingresar numeros en el campo Identificasion'
        ];
        

    }
}
