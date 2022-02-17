<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreClienteRequest;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    //
     public function create(){
    $Cliente = Cliente::get();
    return view('clientes.create',compact('Cliente'));
    }

    public function edit($id){
        $Cliente = Cliente::findorFail($id);
        return view('clientes.edit',['Cliente'=>$Cliente]);
    }

     public function update(Request $request){
        Cliente::find($request->id)->update($request->except('_token'));
        return redirect('index/clientes')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Cliente::findorFail($id)->delete();
      return redirect('clientes.index')->with('msg', 'cliente apagada');
    }

    public function index(){
        $Cliente = Cliente::all();
        return view('clientes.index',compact('Cliente'));
    }








    public function store(StoreClienteRequest $request){

            $StoreClienteRequest = new Cliente();
            $StoreClienteRequest->nome=$request->nome;
            $StoreClienteRequest->cpf=$request->cpf;
            $StoreClienteRequest->rg=$request->rg;
            $StoreClienteRequest->sexo=$request->sexo;
            $StoreClienteRequest->datanascimento=$request->datanascimento;
            $StoreClienteRequest->debito=$request->debito;
            $StoreClienteRequest->save();
    }
    
 
}
