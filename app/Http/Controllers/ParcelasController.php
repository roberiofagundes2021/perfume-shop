<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreParcelaRequest;

class ParcelasController extends Controller
{
    public function create(){
    $Parcelas = Parcelas::get();
    return view('Parcelas.create',compact('Parcelas'));
    }

    public function edit($id){
        $Parcelas=Parcelas::findorFail($id);
        return view('Parcelas.edit',['Parcelas'=>$Parcelas]);
    }

     public function update(Request $request){
       Parcelas::find($request->id)->update($request->except('_token'));
        return redirect('index/Parcelas')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Parcelas::findorFail($id)->delete();
      return redirect('Parcelas.index')->with('msg', 'Parcelas');
    }

    public function index(){
        $Parcelas = Parcelas::all();
        return view('Parcelas.index',compact('Parcelas'));
    }


    public function store(StoreParcelaRequest $request){

            $Parcelas=new Parcelas();
            $Parcelas->numeros_parcelas=$request->numeros_parcelas;
            $Parcelas->valor_parcelas=$request->valor_parcelas;

            $Parcelas->status=$request->status;
            $Parcelas->vencimento=$request->vencimento;
            $Parcelas->valortotalparcela=$request->valortotalparcela;
            $Parcelas->pagamento_id=$request->pagamento_id;
            $Parcelas->save();
    }
}
