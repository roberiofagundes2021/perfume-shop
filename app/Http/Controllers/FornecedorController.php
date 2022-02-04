<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreFornecedorRequest;

class FornecedorController extends Controller
{
     public function create(){
    $Fornecedor = Fornecedor::get();
    return view('FormaPagamento.create',compact('FormaPagamento'));
    }

    public function edit($id){
        $FormaPagamento=Fornecedor::findorFail($id);
        return view('FormaPagamento.edit',['FormaPagamento'=>$FormaPagamento]);
    }

     public function update(Request $request){
       Fornecedor::find($request->id)->update($request->except('_token'));
        return redirect('index/FormaPagamento')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Fornecedor::findorFail($id)->delete();
      return redirect('FormaPagamento.index')->with('msg', 'Forma Pagamento apagada');
    }

    public function index(){
        $Fornecedor = Fornecedor::all();
        return view('FormaPagamento.index',compact('FormaPagamento'));
    }


    public function store(StoreFornecedorRequest $request){

            $Fornecedor=new Fornecedor();
            $Fornecedor->razaosocial=$razaosocial;
            $Fornecedor->cnpj=$request->cnpj;
            $Fornecedor->save();
    }
}
