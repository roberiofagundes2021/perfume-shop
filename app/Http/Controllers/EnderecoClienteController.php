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

            $EnderecoCliente = new EnderecoCliente();
            $EnderecoCliente->cidade=$cidade;
            $EnderecoCliente->estado=$request->estado;
            $EnderecoCliente->bairro=$request->bairro;
            $EnderecoCliente->rua=$request->rua;
            $EnderecoCliente->numero=$request->numero;
            $EnderecoCliente->cep=$request->cep;
            $EnderecoCliente->cliente_id=$request->cliente_id;
            $EnderecoCliente->save();
    }
}
