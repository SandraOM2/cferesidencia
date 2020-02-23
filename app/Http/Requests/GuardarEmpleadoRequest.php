<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarEmpleadoRequest extends FormRequest
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
            'rpe' => 'required',
            'nombres' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'puesto_id' => 'required',
            'correo_electronico' => 'required',
            'contraseña' => 'required|min:8'
        ];
    }

    public function messages()
    {
        return [
            'rpe.required' => 'Favor de ingresar el RPE.',
            'nombres.required' => 'Favor de ingresar el nombre.',
            'apellido_paterno.required' => 'Favor de ingresar el apellido paterno.',
            'apellido_materno.required' => 'Favor de ingresar el apellido materno.',
            'puesto_id.required' => 'Favor de seleccionar un puesto.'
            // 'correo_electronico.required' => 'Favor de ingresar el correo electrónico para el usuario.',
            // 'contraseña' => [
            //     'required' => 'Favor de ingresar la contraseña para el usuario.',
            //     'min' => 'La contraseña debe contener 8 caracteres mínimo.'
            // ],
        ];
    }
}
