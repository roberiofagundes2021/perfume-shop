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

            $Produto=new Produto();
            $Produto->nome=$request->nome;
            $Produto->icms=$request->icms;

            $Produto->ipi=$request->ipi;
            $Produto->frete=$request->frete;
            $Produto->valornafabrica=$request->valornafabrica;
            $Produto->valordecompra=$request->valordecompra;
            $Produto->lucro=$request->lucro;
            $Produto->valorvenda=$request->valorvenda;
            $Produto->desconto=$request->desconto;
            $Produto->quantidade=$request->quantidade;
            $Produto->datavencimento=$request->datavencimento;
            $Produto->marca_id=$request->marca_id;
            $Produto->categoria_id=$request->categoria_id;
            $Produto->prateleira_id=$request->prateleira_id;
            $Produto->save();
    }
}
