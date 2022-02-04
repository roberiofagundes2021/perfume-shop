<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreItensEntradaRequest extends FormRequest
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
            'precocompra'=>'required',
            'quantidade'=>'required',
            'unidade'=>'required',
            'ipi'=>'required',
            'frete'=>'required',
            'icms'=>'required',
            'entrada_id'=>'required',
            'produto_id'=>'required',

        ];
    }

    public function messages(){
        return [
            'precocompra.required'=>'Campo preco de compra e obrigatorio',
            'quantidade.required'=>'Campo quantidade obrigatorio',
            'unidade.required'=>'Campo unidade e obrigatorio',
            'ipi.required'=>'Campo ipi obrigatorio',
            'frete.required'=>'Campo frete e obrigatorio',
            'icms.required'=>'Campo icms obrigatorio',
            'entrada_id.required'=>'a entrada e obrigatorio',
            'produto_id.required'=>'Campo produto obrigatorio',
        ];
    }
}
