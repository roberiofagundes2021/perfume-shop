<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContatoClienteRequest;

class ContatoClienteController extends Controller
{
    //
      public function create(){
    $ContatoCliente = ContatoCliente::get();
    return view('contatocliente.create',compact('Cliente'));
    }

    public function edit($id){
        $ContatoCliente = ContatoCliente::findorFail($id);
        return view('contatocliente.edit',['Cliente'=>$Cliente]);
    }

     public function update(Request $request){
        ContatoCliente::find($request->id)->update($request->except('_token'));
        return redirect('index/contatocliente')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      ContatoCliente::findorFail($id)->delete();
      return redirect('contatocliente.index')->with('msg', 'contato cliente apagada');
    }

    public function index(){
        $ContatoCliente = ContatoCliente::all();
        return view('contatocliente.index',compact('Cliente'));
    }


    public function store(StoreContatoClienteRequest $request){

            $StoreContatoCliente = new ContatoCliente();
            $StoreContatoCliente->nome=$request->nome;
            $StoreContatoCliente->cpf=$request->cpf;
            $StoreContatoCliente->rg=$request->rg;
            $StoreContatoCliente->sexo=$request->sexo;
            $StoreContatoCliente->datanascimento=$request->datanascimento;
            $StoreContatoCliente->debito=$request->debito;
            $StoreContatoCliente->save();
    }
}
