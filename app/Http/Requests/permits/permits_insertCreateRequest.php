<?php

namespace App\Http\Requests\permits;

use Illuminate\Foundation\Http\FormRequest;

class permits_insertCreateRequest extends FormRequest
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

       


                'insert_n' => 'required',
                'editar_natural' => 'required',
                'eliminar_natural' => 'required',
                'insertar_afiliacion' => 'required',
                'editar_afiliacion' => 'required',
                'eliminar_afiliacion' => 'required',
                'insertar_citas' => 'required',
                'editar_citas' => 'required',
                'eliminar_citas' => 'required',
                'insertar_ingreso' => 'required',
                'editar_ingreso' => 'required',
                'eliminar_ingreso' => 'required',
                'insertar_autorizacion' => 'required',
               'editar_autorizacion' => 'required',
                'eliminar_autorizacion' => 'required',
                'insertar_historialc' => 'required',
                'editar_historialc' => 'required',
                'eliminar_historialc' => 'required',
               'user_id' => 'required',
                'insertar_entidades' => 'required',
                'editar_entidades' => 'required',
                'eliminar_entidades' => 'required',
                'insertar_servicios' => 'required',
                'editar_servicios' => 'required',
                'eliminar_servicios' => 'required',
                'tipo_producto' => 'required',
                'insertar_producto' => 'required',
                'editar_producto' => 'required',
                'eliminar_producto' => 'required',
                'insertar_devolucion' => 'required',
                'eliminar_devolucion' => 'required',
                'vender' => 'required',
                'insertar_factura' => 'required',
                'eliminar_factura' => 'required',
                'insertar_abonos' => 'required',
                'editar_abonos' => 'required',
                'eliminar_abonos' => 'required',
            
        ];
    }



    public function messages()
    {
        return[
            'insert_n.required'=>'Seleccionar permisos para Insertar persona',
            'editar_natural.required'=>'Seleccionar permisos para Editar persona',
            'eliminar_natural.required'=>'Seleccionar permisos para Eliminar persona',
            'insertar_afiliacion.required'=>'Seleccionar permisos para Insertar Afiliacion',
            'editar_afiliacion.required'=>'Seleccionar permisos para Editar Afiliacion',
            
            
        ];
        

    }
}
