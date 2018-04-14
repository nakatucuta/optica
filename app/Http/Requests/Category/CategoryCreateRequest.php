<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
           
           

        ];
    }

public function messages()
    {
        return[
            'name.required'=>'Debes Colocar El nombre..!', 
            'description.required'=>'Debes Colocar la Descripcion..!'
        ];
        

    }
        

    }

