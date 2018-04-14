<?php

namespace App\Http\Requests\Appointment_calendar;

use Illuminate\Foundation\Http\FormRequest;

class Appointment_calendarCreateRequest extends FormRequest
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
            'date' => 'required',
            'time' => 'required',
            'state_id' => 'required',
            'affiliation_id' => 'required',
            'user_id'=> 'required',
           

        ];
    }

public function messages()
    {
        return[
            'time.required'=>'Debes Colocar la hora de la Cita..!', 
            'date.required'=>'Debes Colocar la hora de la Fecha..!'
        ];
        

    }
        

    }

