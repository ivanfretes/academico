<?php

namespace Academico2\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlumnoStore extends FormRequest
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
            'ci' => 'required|max:11',
            'apellido' => 'required|max:50',
            'nombre' => 'required|max:50', 
            'id_carrera' => 'required'
        ];
    }
}
