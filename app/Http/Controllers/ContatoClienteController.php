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

            $ContatoCliente = new ContatoCliente();
            $ContatoCliente->nome=$request->nome;
            $ContatoCliente->cpf=$request->cpf;
            $ContatoCliente->rg=$request->rg;
            $ContatoCliente->sexo=$request->sexo;
            $ContatoCliente->datanascimento=$request->datanascimento;
            $ContatoCliente->debito=$request->debito;
            $ContatoClienteia->save();
    }
}
