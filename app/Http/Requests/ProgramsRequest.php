<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramsRequest extends FormRequest
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
            'nombre_programa'=> 'required',
            'descripcion_programa'=> 'required', 
            'tipo_programa'=> 'required', 
            'duracion'=> 'required',
        ];
    }

    public function messages(){
        return[
            'nombre_programa.required'=> 'El campo es requerido',
            'descripcion_programa.required'=> 'El campo es requerido', 
            'tipo_programa.required'=> 'El campo es requerido', 
            'duracion.required'=> 'El campo es requerido',
        ];
    }
}
