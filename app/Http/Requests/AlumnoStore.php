<?php

namespace KuaaSys\Http\Requests;

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
            'alumno_ci' => 'required|max:11',
            'alumno_apellidos' => 'required|max:50',
            'alumno_nombres' => 'required|max:50' 
        ];
    }
}
