<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFornecedorRequest extends FormRequest
{
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'razaosocial'=>'required',
            'cnpj'=>'required',
        
        ];
    }

    public function messages(){
        return [
            'razaosocial.required' => 'Campo razao social e obrigatorio',
            'cnpj.required' => 'Campo cnpj obrigatorio',

        ];
    }
}
