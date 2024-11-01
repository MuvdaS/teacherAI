<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\TeacherFormRequest;
use Illuminate\Validation\Validator;

class TeacherFormRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'nome' => ['required','min:3','max:65'],
            'instituticao' => ['required','min:5','max:128'],
            'email' => ['required','email','max:40'],
            'senha' => ['required','min:10','max:20'],
        ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Campo nome é obrigatório',
            'nome.min' => 'Campo nome deve ter mais que :min caracteres',
            'nome.max' => 'Campo nome deve ter menos que :max caracteres',

            'instituticao.required' => 'Campo e-mail é obrigatório',
            'instituticao.min' => 'Campo instituticao deve ter mais que :min caracteres',
            'instituticao.max' => 'Campo instituticao deve ter menos que :max caracteres',

            'email.required' => 'Campo e-mail é obrigatório',
            'email.max' => 'Campo e-mail deve ter menos que :max caracteres',
            'email.email' => 'E-mail incorreto',

            'senha.required' => 'Campo senha é obrigatório',
            'senha.min' => 'Campo senha deve ter mais que :min caracteres',
            'senha.max' => 'Campo senha deve ter menos que :max caracteres',
        ];
    }
}
