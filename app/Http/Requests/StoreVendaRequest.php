<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendaRequest extends FormRequest
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
            
            'data_venda'=>'required',
            'cliente_id'=>'required',
        ];
         return redirect()->route('venda.index');
    }

    public function messages(){
        return [
            'data_venda.required' => 'Campo data venda obrigatorio',
            'cliente_id.required' => 'Campo nome do cliente obrigatorio',
        ];
    }
}
