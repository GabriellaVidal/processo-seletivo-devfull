<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Contact extends FormRequest
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
            'name' => 'required',
            'phone' => 'required',
            'email' => 'email|required',
            'linkedin' => 'required',
            'github' => 'required',
            'level_english' => 'required',
            'salary' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => "O campo Nome Completo é obrigatório",
            'phone.required' => "O campo Telefone é obrigatório",
            'email.required' => "O campo E-mail é obrigatório",
            'email.email' => "E-mail inválido",
            'linkedin.required' => "O campo Linkedin é obrigatório",
            'github.required' => "O campo Github é obrigatório",
            'level_english.required' => "O campo Nível do Inglês é obrigatório",
            'salary.required' => "O campo Pretensão Salarial é obrigatório"
        ];
    }
}
