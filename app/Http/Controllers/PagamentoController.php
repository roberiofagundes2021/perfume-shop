<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePagamentoRequest;

class PagamentoController extends Controller
{
     public function create(){
    $Pagamento = Pagamento::get();
    return view('Pagamento.create',compact('Pagamento'));
    }

    public function edit($id){
        $Pagamento=Pagamento::findorFail($id);
        return view('Pagamento.edit',['Pagamento'=>$Pagamento]);
    }

     public function update(Request $request){
       Pagamento::find($request->id)->update($request->except('_token'));
        return redirect('index/Pagamento')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Pagamento::findorFail($id)->delete();
      return redirect('Pagamento.index')->with('msg', 'Pagamento');
    }

    public function index(){
        $Pagamento = Pagamento::all();
        return view('Pagamento.index',compact('Pagamento'));
    }


    public function store(StorePagamentoRequest $request){

            $Pagamento=new Pagamento();
            $Pagamento->valor_pagamento=$request->valor_pagamento;
            $Pagamento->data_pagamento=$request->data_pagamento;
            $Pagamento->save();
    }
}
