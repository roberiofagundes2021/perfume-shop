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

            $ItensVendas=new ItensVendas();
            $ItensVendas->quantidade_itens=$request->quantidade_itens;
            $ItensVendas->desconto=$request->desconto;
            $ItensVendas->valor=$request->valor;
            $ItensVendas->venda_id=$request->venda_id;
            $ItensVendas->produto_id=$request->produto_id;
            $ItensVendas->save();
    }
}
