<?php

namespace App\Http\Controllers;

use App\Models\Marca;
use App\Http\Requests\StoreMarcaRequest;

use Illuminate\Http\Request;

class MarcaController extends Controller
{
  public function create(){
    $Marca = Marca::get();
    return view('Marca.create',compact('Marca'));
    }

    public function edit($id){
        $Marca=Marca::findorFail($id);
        return view('Marca.edit',['Marca'=>$Marca]);
    }

     public function update(Request $request){
       Marca::find($request->id)->update($request->except('_token'));
        return redirect('index/Marca')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Marca::findorFail($id)->delete();
      return redirect('Marca.index')->with('msg', 'Marca');
    }

    public function index(){
        $Marca = Marca::all();
        return view('Marca.index',compact('Marca'));
    }


    public function store(StoreMarcaRequest $request){

            $Marca=new Marca();
            $Marca->nome=$request->nome;
            $Marca->save();
    }
}
