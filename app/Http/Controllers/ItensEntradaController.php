<?php

namespace App\Http\Controllers;
use App\Models\ItensEntrada;
use App\Http\Requests\StoreItensEntradaRequest;
use App\Models\Entrada;
use App\Models\Produto;

use Illuminate\Http\Request;

class ItensEntradaController extends Controller
{
    public function create(){
    $ItensEntrada = ItensEntrada::get();
    $Entrada = Entrada::get();
    $Produto = Produto::get();
    return view('ItensEntrada.create',compact('ItensEntrada','Entrada','Produto'));
    }

    public function edit($id){
        $ItensEntrada=ItensEntrada::findorFail($id);
        return view('ItensEntrada.edit',['ItensEntrada'=>$ItensEntrada]);
    }

     public function update(Request $request){
       ItensEntrada::find($request->id)->update($request->except('_token'));
        return redirect('index/ItensEntrada')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      ItensEntrada::findorFail($id)->delete();
      return redirect('ItensEntrada.index')->with('msg', 'Forma Pagamento apagada');
    }

    public function index(){
        $ItensEntrada = ItensEntrada::all();
        return view('ItensEntrada.index',compact('ItensEntrada'));
    }


    public function store(StoreItensEntradaRequest $request){

            $ItensEntrada=new ItensEntrada();
            $ItensEntrada->precocompra=$request->precocompra;
            $ItensEntrada->quantidade=$request->quantidade;
            $ItensEntrada->unidade=$request->unidade;
            $ItensEntrada->ipi=$request->ipi;
            $ItensEntrada->frete=$request->frete;
            $ItensEntrada->icms=$request->icms;
            $ItensEntrada->entrada_id=$request->entrada_id;
            $ItensEntrada->produto_id=$request->produto_id;
            $ItensEntrada->save();
    }
}
