<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class RoleRequest extends FormRequest
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
            'nombre.required'=>__('Ingrese Rol'),
            'nombre.string'=>__('Ingrese un cadena de texto'),
            'name.unique'=>__('El rol ya existe'),
            'descripcion.required'=>__('Ingrese Guard Name'),
            'descripcion.string'=>__('Ingrese un cadena de texto'),
        ];
    }
    public function rules(): array
    {
        return [
            'nombre'=>['required','string',Rule::unique(table: 'roles',column:'nombre')],
            'descripcion'=>['required','string'],
        ];
    }
}
