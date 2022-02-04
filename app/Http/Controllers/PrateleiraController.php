<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StorePrateleiraRequest;

class PrateleiraController extends Controller
{
    public function create(){
    $Prateleira = Prateleira::get();
    return view('Prateleira.create',compact('Prateleira'));
    }

    public function edit($id){
        $Prateleira=Prateleira::findorFail($id);
        return view('Prateleira.edit',['Prateleira'=>$Prateleira]);
    }

     public function update(Request $request){
       Prateleira::find($request->id)->update($request->except('_token'));
        return redirect('index/Prateleira')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Prateleira::findorFail($id)->delete();
      return redirect('Prateleira.index')->with('msg', 'Prateleira');
    }

    public function index(){
        $Prateleira = Prateleira::all();
        return view('Prateleira.index',compact('Prateleira'));
    }


    public function store(StorePrateleiraRequest $request){

            $Prateleira=new Prateleira();
            $Prateleira->descricao=$request->descricao;
            $Prateleira->quantidadedefrascos=$request->quantidadedefrascos;
            $Prateleira->save();
    }
}
