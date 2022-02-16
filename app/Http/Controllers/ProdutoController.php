<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Marca;
use App\Models\Categoria;
use App\Models\Prateleira;
use App\Http\Requests\StoreProdutoRequest;


use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function create(){
    $Produto = Produto::get();
    $Marca = Marca::get();
    $Categoria = Categoria::get();
    $Prateleira = Prateleira::get();
    return view('Produto.create',compact('Produto','Marca','Categoria','Prateleira'));
    }

    public function edit($id){
        $Produto=Produto::findorFail($id);
        return view('Produto.edit',['Produto'=>$Produto]);
    }

     public function update(Request $request){
       Produto::find($request->id)->update($request->except('_token'));
        return redirect('index/Produto')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Produto::findorFail($id)->delete();
      return redirect('Produto.index')->with('msg', 'Produto');
    }

    public function index(){
        $Produto = Produto::all();
        return view('Produto.index',compact('Produto'));
    }


    public function store(StoreProdutoRequest $request){

            $StoreProdutoRequest=new Produto();
            $StoreProdutoRequest->nome=$request->nome;
            $StoreProdutoRequest->icms=$request->icms;

            $StoreProdutoRequest->ipi=$request->ipi;
            $StoreProdutoRequest->frete=$request->frete;
            $StoreProdutoRequest->valornafabrica=$request->valornafabrica;
            $StoreProdutoRequest->valordecompra=$request->valordecompra;
            $StoreProdutoRequest->lucro=$request->lucro;
            $StoreProdutoRequest->valorvenda=$request->valorvenda;
            $StoreProdutoRequest->desconto=$request->desconto;
            $StoreProdutoRequest->quantidade=$request->quantidade;
            $StoreProdutoRequest->datavencimento=$request->datavencimento;
            $StoreProdutoRequest->marca_id=$request->marca_id;
            $StoreProdutoRequest->categoria_id=$request->categoria_id;
            $StoreProdutoRequest->prateleira_id=$request->prateleira_id;
            $StoreProdutoRequest->save();
    }
}
