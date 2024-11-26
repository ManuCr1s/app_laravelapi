<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class AnexoRequest extends FormRequest
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
            'nombre.required'=>__('Ingrese Caserio Anexo'),
            'nombre.string'=>__('Ingrese un cadena de texto'),
            'nombre.unique'=>__('El Caserio ya existe'),
            'id_centro_poblado.required'=>__('Ingrese Centro Poblado'),
        ];
    }
    public function rules(): array
    {
        return [
            'nombre'=>['required','string',Rule::unique(table: 'caserios_anexos',column:'nombre')->ignore($this->anexo)],
            'id_centro_poblado'=>['required'],
        ];
    }
}
