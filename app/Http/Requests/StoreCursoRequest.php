<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            //
            'curso' => 'required|min:3|max:150',
            'categoria' => 'required',
            'descripcion' => 'required'
        ];
    }



    public function attributes()
    {
        return [
            'curso' => 'nombre del curso que está por dar de alta',
            'descripcion' => 'descripcion del curso para crear'
        ];
    }

    public function messages()
    {
        return [
            'descripcion.required' => 'este campo es super obligatorio y no puedes dejar de cargarlo'
        ];
    }

}
