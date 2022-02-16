<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEnderecoClienteRequest;

class EnderecoClienteController extends Controller
{
    //
    //
    public function create(){
    $EnderecoCliente = EnderecoCliente::get();
    return view('EnderecoCliente.create',compact('EnderecoCliente'));
    }

    public function edit($id){
        $EnderecoCliente = EnderecoCliente::findorFail($id);
        return view('EnderecoCliente.edit',['EnderecoCliente'=>$EnderecoCliente]);
    }

     public function update(Request $request){
        EnderecoCliente::find($request->id)->update($request->except('_token'));
        return redirect('index/EnderecoCliente')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      EnderecoCliente::findorFail($id)->delete();
      return redirect('EnderecoCliente.index')->with('msg', 'Endereco Cliente apagada');
    }

    public function index(){
        $EnderecoCliente = EnderecoCliente::all();
        return view('EnderecoCliente.index',compact('EnderecoCliente'));
    }


    public function store(StoreEnderecoClienteRequest $request){

            $StoreEnderecoClienteRequest = new EnderecoCliente();
            $StoreEnderecoClienteRequest->cidade=$cidade;
            $StoreEnderecoClienteRequest->estado=$request->estado;
            $StoreEnderecoClienteRequest->bairro=$request->bairro;
            $StoreEnderecoClienteRequest->rua=$request->rua;
            $StoreEnderecoClienteRequest->numero=$request->numero;
            $StoreEnderecoClienteRequest->cep=$request->cep;
            $StoreEnderecoClienteRequest->cliente_id=$request->cliente_id;
            $StoreEnderecoClienteRequest->save();
    }
}
