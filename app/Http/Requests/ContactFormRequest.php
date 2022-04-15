<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
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
            'email' => 'required | email',
            'name' => 'required | string',
            'content' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'Insira um email válido',
            'name.required' => 'O campo nome é obrigatório',
            'name.string' => 'Insira um nome válido',
            'content.required' => 'O campo de conteudo é obrigatório'
        ];
    }
}
