<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreFormaPagamentoRequest;

use Illuminate\Http\Request;

class FormaPagamentoController extends Controller
{
     public function create(){
    $FormaPagamento = FormaPagamento::get();
    return view('FormaPagamento.create',compact('FormaPagamento'));
    }

    public function edit($id){
        $FormaPagamento=FormaPagamento::findorFail($id);
        return view('FormaPagamento.edit',['FormaPagamento'=>$FormaPagamento]);
    }

     public function update(Request $request){
       FormaPagamento::find($request->id)->update($request->except('_token'));
        return redirect('index/FormaPagamento')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      FormaPagamento::findorFail($id)->delete();
      return redirect('FormaPagamento.index')->with('msg', 'Forma Pagamento apagada');
    }

    public function index(){
        $FormaPagamento = StoreFormaPagamento::all();
        return view('FormaPagamento.index',compact('FormaPagamento'));
    }


    public function store(FormaPagamentoRequest $request){

            $FormaPagamento=new FormaPagamento();
            $FormaPagamento->tipo_pagamento=$tipo_pagamento;
            $FormaPagamento->venda_id=$request->venda_id;
            $FormaPagamento->save();
    }
}
