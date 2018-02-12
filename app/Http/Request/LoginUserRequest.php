<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
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
          'email' => ['required','string','max:255'],
          'password' => ['required','string','min:6'],
        ];
    }
    public function messages(){
      return [
          'email.required'=>'La Dirección de Correo electrónico, es un campo requerido, por favor completalo para poder continuar.',
          'email.max'=>'La Dirección de Correo electrónico no puede superar mas de 255 Caracteres.',
          'email.email'=>'La Dirección de Correo electrónico debe ser una dirección de correo electrónico válida.',
          'password.required'=>'La contraseña, es un campo requerido, por favor completalo para poder continuar.',
          'password.min'=>'La contraseña debe tener al menos 6 caracteres.'
        ];
    }
}
