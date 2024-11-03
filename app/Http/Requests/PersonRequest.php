<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
    public function massages(): array
    {
        return [
            //
        ];
    }
    public function rules(): array
    {
        return [
            'dni'=>['required','string','size:8'],
            'apellido_paterno'=>['required','string'],
            'apellido_materno'=>['required','string'],
            'nombres'=>['required','string'],
            'telefono'=>['required','string'],
            'email'=>['required','string','email'],
            'id_region' => ['required'],
            'id_province' => ['required'],
            'id_districts' => ['required'], 
            'id_rol' => ['required'], 
        ];
    }
}
