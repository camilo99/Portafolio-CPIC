<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmpresaRequest extends FormRequest
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
        if ($this->method()=='PUT') {
            return [
                'titulo'=>'required',
                'descripcion'=>'required',
            ];
        }
        else{
            return [
                'titulo'=>'required',
                'descripcion'=>'required',
                'foto'=>'required',
            ];
        }
    }
    public function messages()
    {
        return [
            'titulo.required'=>'Este campo es requerido',
            'descripcion.required'=>'Este campo es requerido',
            'foto.required'=>'Este campo es requerido',

        ];
    }
}
