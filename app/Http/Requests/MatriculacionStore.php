<?php

namespace Academico2\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MatriculacionStore extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_alumno' => 'required',
            'id_materia' => 'required'
        ];
    }
}
