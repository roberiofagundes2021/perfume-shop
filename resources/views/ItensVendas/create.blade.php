
@extends('layouts.main')



@section('conteudo')

  @extends('layouts.app')

    <form action="{{route('itensvendas.store')}}" method="post">
        @csrf
        
        <div class="row g-3">

            @section('titulo','Cadastro de Itens Vendas')
            @if($errors->any())
                        <div class="alert alert-danger">
                       
                            @foreach($errors->all() as $error)

                                <label>{{$error}}</label><br>
                            @endforeach
                        
                        </div>

                    @endif
            <div class="col">
                <label for="quantidade_itens">quantidade de itens</label><br>
                <input type="text" class="form-control" name="quantidade_itens" id="quantidade_itens">

                <label for="valor">valor</label>
                <input type="text" class="form-control" name="valor" id="valor"><br>

                <input type="submit" class="btn btn-primary" value="cadastrar">
            </div>
            <div class="col">
                <label  for="produto_id">produto</label>
                {{-- pega a variavel passada pelo metodo create do controller --}}
                
                <select class="form-control" name="produto_id">
                    @foreach($Produto as $produto)
                    <option value="{{$produto->produto_id}}">
                        {{ $produto->nome }}
                    </option>
                     @endforeach
                </select>


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
         
        
    </form>

@endsection('conteudo')
@section('footer')

@endsection('footer')
