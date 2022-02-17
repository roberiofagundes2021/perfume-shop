
@extends('layouts.main')



@section('conteudo')

  @extends('layouts.app')

    <form action="{{route('itensvendas.store')}}" method="post">
        @csrf
        
        <div class="row g-3">

            @section('titulo','Cadastro de Itens Vendas')
           
            <div class="col">
                <label for="quantidade_itens">quantidade de itens</label><br>
                <input type="text" class="form-control" name="quantidade_itens" id="quantidade_itens">

                <label for="valor">valor</label>
                <input type="text" class="form-control" name="valor" id="valor"><br>

           
               <label  for="produto_id">produto</label>
              <select name="produto_id" id="produto_id" class="form-control">
                     @foreach($Produto as $produto)
                        <option value="{{old('produto_id', $produto->id)}}"> 
                            {{$produto->nome}} 
                        </option>
                     @endforeach
                </select>
                
            
                
                {{-- pega a variavel passada pelo metodo create do controller --}}
                
            
                    <input type="text" name="" value="{{$Venda->id }}">

                 <label for="venda_id">venda</label>
                {{-- pega a variavel passada pelo metodo create do controller --}}
                    <select class="form-control" name="venda_id">
                        @foreach($Venda as $venda)
                        <option value="{{$venda->venda_id}}">
                            {{$venda->data_venda}}
                        </option>
                        @endforeach
                    </select><br><br>
                
                

               </div> 
          
                    @if($errors->any())
                        <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <label>{{$error}}</label><br>
                        @endforeach
                    @endif  
                    
                    
                <input type="submit" class="btn btn-primary" value="cadastrar">
         
        
    </form>

@endsection('conteudo')
@section('footer')

@endsection('footer')
