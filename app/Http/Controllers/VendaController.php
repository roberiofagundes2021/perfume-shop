<?php

namespace App\Http\Controllers;
use App\Models\Venda;
use App\Models\Cliente;
use App\Http\Requests\StoreVendaRequest;


class VendaController extends Controller
{
    public function create(){
    $Venda = Venda::get();
    $Cliente = Cliente::get();
    return view('Venda.create',compact('Venda','Cliente'));
    }

    public function edit($id){
        $Venda=Venda::findorFail($id);
        return view('Venda.edit',['Venda'=>$Venda]);
    }

     public function update(Request $request){
       Venda::find($request->id)->update($request->except('_token'));
        return redirect('index/Venda')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Venda::findorFail($id)->delete();
      return redirect('Venda.index')->with('msg', 'Venda');
    }

    public function index(){
        $Venda = Venda::all();
        return view('Venda.index',compact('Venda'));
    }


    public function storevendas(StoreVendaRequest $request){

            $StoreVendaRequest=new Venda();
            $StoreVendaRequest->datavenda=$request->datavenda;
            $StoreVendaRequest->descontototal=$request->descontototal;

            $StoreVendaRequest->descontoacerto=$request->descontoacerto;
            $StoreVendaRequest->valortotal=$request->valortotal;
            $StoreVendaRequest->cliente_id=$request->cliente_id;
            $StoreVendaRequest->save();
   
    }
}
