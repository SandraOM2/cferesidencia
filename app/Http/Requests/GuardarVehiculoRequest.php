<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarVehiculoRequest extends FormRequest
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
            'numero_economico' => 'required',
            'marca_id' => 'required',
            'modelo_id' => 'required',
            'año' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'numero_economico.required' => 'Favor de ingresar el número económico.',
            'marca_id.required' => 'Favor de seleccionar una marca.',
            'modelo_id.required' => 'Favor de seleccionar un modelo.',
            'año.required' => 'Favor de ingresar año.'
        ];
    }
}