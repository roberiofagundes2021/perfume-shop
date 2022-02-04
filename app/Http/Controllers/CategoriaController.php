<?php

namespace App\Http\Controllers;


use App\Http\Requests\StoreCategoriaRequest;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //

    public function create(){
    $Categoria = Categoria::get();
    return view('categoria.create',compact('Categoria'));
    }

    public function edit($id){
        $Categoria = Categoria::findorFail($id);
        return view('categoria.edit',['Categoria'=>$Categoria]);
    }

     public function update(Request $request){
        Categoria::find($request->id)->update($request->except('_token'));
        return redirect('index/categoria')->with('msg', 'alteração realdizado com sucesso');

    }

     public function destroy($id)
    {
      Categoria::findorFail($id)->delete();
      return redirect('categoria.index')->with('msg', 'categoria apagada');
    }

    public function index(){
        $Categoria = Categoria::all();
        return view('categoria.index',compact('Categoria'));
    }


    public function store(StoreCategoriaRequest $request){

        $Categoria = new Categoria();
        $Categoria->nome=$request->nome;
        $Categoria->timestamps=$request->timestamps;
        $Categoria->save();
        
    }
}
