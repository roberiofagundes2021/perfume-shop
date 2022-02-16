<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContatoFornecedorRequest;

use Illuminate\Http\Request;

class ContatoFornecedorController extends Controller
{
    //
      public function create(){
    $ContatoFornecedor = ContatoFornecedor::get();
    return view('ContatoFornecedor.create',compact('Cliente'));
    }

    public function edit($id){
        $ContatoFornecedor = ContatoFornecedor::findorFail($id);
        return view('ContatoFornecedor.edit',['Cliente'=>$Cliente]);
    }

     public function update(Request $request){
        ContatoFornecedor::find($request->id)->update($request->except('_token'));
        return redirect('index/ContatoFornecedor')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      ContatoFornecedor::findorFail($id)->delete();
      return redirect('ContatoFornecedor.index')->with('msg', 'contato Contato Fornecedor apagada');
    }

    public function index(){
        $ContatoFornecedor = ContatoFornecedor::all();
        return view('ContatoFornecedor.index',compact('ContatoFornecedor'));
    }


    public function store(StoreContatoFornecedorRequest $request){

            $StoreContatoFornecedor = new ContatoCliente();
            $StoreContatoFornecedor->telefone_fornecedor=$telefone_fornecedor;
            $StoreContatoFornecedor->whatsappfornecedor=$request->whatsappfornecedor;
            $StoreContatoFornecedor->email_fornecedor=$request->email_fornecedor;
            $StoreContatoFornecedor->fornecdor_id=$request->fornecdor_id;
            $StoreContatoFornecedor->save();
    }
    
}
