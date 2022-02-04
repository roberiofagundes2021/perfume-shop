<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnderecoClienteRequest extends FormRequest
{
    public function rules()
    {
        return [
            //
            'nome'=>'required',
            'debito'=>'required|numeric',
            'cpf'=>'required|min:11',
            'rg'=>'required',
            'datanascimento'=>'required',
            'sexo'=>'required',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Campo nome obrigatorio',
            'debito.required' => 'Campo debito obrigatorio',
            'cpf.required' => 'Campo cpf obrigatorio',
            'min.required' => 'Campo e obrigatorio ter 11 digito ',
            'rg.required' => 'Campo rg obrigatorio',
            'datanascimento.required' => 'Campo data de nascimento obrigatorio',
            'sexo.required'=>'Campo sexo e obrigatorio'
        ];
    }
}
