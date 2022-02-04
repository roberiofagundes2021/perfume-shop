<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItensVendaRequest extends FormRequest
{
   /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            'quantidade_itens'=>'required',
            'desconto'=>'required',
            'valor'=>'required',
            'venda_id'=>'required',
            'produto_id'=>'required',

        ];
    }

    public function messages(){
        return [
            'quantidade_itens.required'=>'Campo quantidade de itens e obrigatorio',
            'desconto.required'=>'Campo desconto obrigatorio',
            'valor.required'=>'Campo valor e obrigatorio',
            'venda_id.required'=>'Campo venda obrigatorio',
            'produto_id.required'=>'Campo produto e obrigatorio',
        ];
    }
}
