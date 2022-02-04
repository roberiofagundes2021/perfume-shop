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

            $Devolucao = new Devolucao();
            $Devolucao->quantidade_devolvida=$quantidade_devolvida;
            $Devolucao->datadevolucao=$request->datadevolucao;
            $Devolucao->descricao=$request->descricao;
            $Devolucao->item_vendas_id=$request->item_vendas_id;
            $Devolucao->save();
    }
}
