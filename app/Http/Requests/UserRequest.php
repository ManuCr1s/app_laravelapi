<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
    public function messages(): array{
        return[
            'dni.required'=>__('Ingrese Dni'),
            'dni.string'=>__('Ingrese cadena de texto'),
            'dni.size'=>__('Ingrese numero de Dni correcto'),
            'password.required'=>__('Ingrese Contraseña'),
            'password.string'=>__('Ingrese contraseña para sistema'),
            'id_rol.required'=>__('Ingrese rol'),
            'id_rol.string'=>__('Ingrese caracter'),
        ];  
    }
    public function rules(): array
    {
        return [
            'dni'=>['required','string','size:8'],
            'id_rol'=>['required','string'],
            'password'=>['required','string'],
        ];
    }
}
