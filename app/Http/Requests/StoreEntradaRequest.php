<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEntradaRequest extends FormRequest
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
            'valortotaldanota'=>'required',
            'dataentrada'=>'required',
            'fornecedor_id'=>'required',
        ];
    }

    public function messages(){
        return [
            'valortotaldanota.required' => 'Campo valor total da nota e obrigatorio',
            'dataentrada.required' => 'Campo data da entrada obrigatorio',
            'fornecedor_id.required' => 'Campo fornecedor obrigatorio',
        ];
    }
}
