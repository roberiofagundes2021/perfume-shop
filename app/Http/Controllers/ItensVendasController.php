<?php

namespace App\Http\Controllers;
use App\Models\ItensVendas;
use App\Models\Produto;
use App\Models\Venda;
use App\Http\Requests\StoreItensVendaRequest;


use Illuminate\Http\Request;

class ItensVendasController extends Controller
{
    public function create(){
    $ItensVendas = ItensVendas::get();
    $Produto = Produto::get();
    $Venda = Venda::get();
    return view('ItensVendas.create',compact('Produto','Venda'));
    }

    public function edit($id){
        $ItensVendas=ItensVendas::findorFail($id);
        return view('ItensVendas.edit',['ItensVendas'=>$ItensVendas]);
    }

     public function update(Request $request){
       ItensVendas::find($request->id)->update($request->except('_token'));
        return redirect('index/ItensVendas')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      ItensVendas::findorFail($id)->delete();
      return redirect('ItensVendas.index')->with('msg', 'ItensVendas');
    }

    public function index(){
        $ItensVendas = ItensVendas::all();
        return view('ItensVendas.index',compact('ItensVendas'));
    }


    public function store(StoreItensVendaRequest $request){

            $ItemVendas=new ItensVendas();
            $ItemVendas->quantidade_itens=$request->quantidade_itens;
            $ItemVendas->desconto=$request->desconto;
            $ItemVendas->valor=$request->valor;
            $ItemVendas->venda_id=$request->venda_id;
            $ItemVendas->produto_id=$request->produto_id;
            $ItemVendas->save();
        
        return redirect()->route('vendas.index');
    }
}
