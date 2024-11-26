<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CentroRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function messages():array
    {
        return [
            'nombre.required'=>__('Ingrese Centro Poblado'),
            'nombre.string'=>__('Ingrese un cadena de texto'),
            'nombre.unique'=>__('El Centro Poblado ya existe'),
            'id_districts.required'=>__('Ingrese Distrito'),
        ];
    }
    public function rules(): array
    {
        return [
            'nombre'=>['required','string',Rule::unique(table: 'centros_poblados',column:'nombre')->ignore($this->centro)],
            'id_districts'=>['required'],
        ];
    }
}
