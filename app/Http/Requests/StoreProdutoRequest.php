<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
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
            'nome'=>'required',
            'icms'=>'required',
            'ipi'=>'required',
            'frete'=>'required',
            'valornafabrica'=>'required',
             'valordecompra'=>'required',
            'lucro'=>'required',
            'valorvenda'=>'required',
            'desconto'=>'required',
            'quantidade'=>'required',
            'datavencimento'=>'required',
            'marca_id'=>'required',
            'categoria_id'=>'required',
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Campo nome e obrigatorio',
            'icms.required' => 'Campo icms obrigatorio',
            'ipi.required' => 'Campo ipi e obrigatorio',
            'frete.required' => 'Campo frete obrigatorio',
            'valornafabrica.required' => 'Campo valor na fabrica e obrigatorio',
            'valordecompra.required' => 'Campo valor de compra e obrigatorio',
            'lucro.required' => 'Campo lucro obrigatorio',
            'valorvenda.required' => 'Campo valor de venda e obrigatorio',
            'desconto.required' => 'Campo desconto obrigatorio',
            'quantidade.required' => 'Campo  quantidade e obrigatorio',
            'datavencimento.required' => 'Campo datavencimento e obrigatorio',
            'marca_id.required' => 'Campo marca obrigatorio',
            'categoria_id.required' => 'Campo categoria e obrigatorio',
        ];
    }
}
