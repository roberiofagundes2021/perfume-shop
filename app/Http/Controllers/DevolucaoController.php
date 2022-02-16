<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreDevolucaoRequest;

class DevolucaoController extends Controller
{
   
    //
    public function create(){
    $Devolucao = Devolucao::get();
    return view('Devolucao.create',compact('Devolucao'));
    }

    public function edit($id){
        $Devolucao = Devolucao::findorFail($id);
        return view('Devolucao.edit',['Devolucao'=>$Devolucao]);
    }

     public function update(Request $request){
        Devolucao::find($request->id)->update($request->except('_token'));
        return redirect('index/Devolucao')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Devolucao::findorFail($id)->delete();
      return redirect('Devolucao.index')->with('msg', 'contato Devolucao apagada');
    }

    public function index(){
        $Devolucao = Devolucao::all();
        return view('Devolucao.index',compact('Devolucao'));
    }


    public function store(StoreDevolucaoRequest $request){

            $StoreDevolucaoRequest = new Devolucao();
            $StoreDevolucaoRequest->quantidade_devolvida=$quantidade_devolvida;
            $StoreDevolucaoRequest->datadevolucao=$request->datadevolucao;
            $StoreDevolucaoRequest->descricao=$request->descricao;
            $StoreDevolucaoRequest->item_vendas_id=$request->item_vendas_id;
            $StoreDevolucaoRequest->save();
    }
}
