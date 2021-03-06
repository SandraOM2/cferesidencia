<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarModeloRequest extends FormRequest
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
            'descripcion' => 'required',
            'marca_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'Favor de ingresar una descripción',
            'marca_id.required' => 'Favor de seleccionar la marca del modelo'
        ];
    }
}