@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')


    
    <form action="{{route('itensentradas.store')}}" method="post">
      <div class="row g-3">   
        <div><h4>cadastro de itens entradas</h4><br> </div>  
             <div class="col">

                @csrf
                <label for="quantidade">quantidade</label><br>
                <input type="text" class="form-control" name="quantidade" id="quantidade" style="width:150px">

                <label for="unidade">unidade</label><br>
                <input type="text" class="form-control" name="unidade" id="unidade" style="width:150px">

                <label for="ipi">ipi</label><br>
                <input type="text" class="form-control" name="ipi" id="ipi" style="width:150px"><br>

                

                <input type="submit" class="btn btn-primary" value="cadastrar" style="width:100px">
            </div>

                

            <div class="col">
                <label for="icms">icms</label><br>
                <input type="text" class="form-control" name="icms" id="icms" style="width:150px">

                <label for="id_entradas" style="width:150px">entrada</label><br>
                {{-- pega a variavel passada pelo metodo create do controller --}}
                   
                    <select class="form-control"  name="id_entradas" style="width:150px"><br>
                        @foreach($Entradas as $entrada)  
                            <option value="{{ $entrada->id_entradas }}" style="width:150px"><br>
                                {{ $entrada->dataentrada }}<br>
                            </option>
                        @endforeach                        
                    </select>

                    <label for="frete">frete</label><br>
                <input type="text" class="form-control" name="frete" id="frete" style="width:150px"><br>
                        
            </div>

            <div class="col">
                 <label for="id_produtos">produto</label><br>
                {{-- pega a variavel passada pelo metodo create do controller --}}
                      
                      
                    <select class="form-control" name="id_produtos" id="id_produtos" style="width:150px">
                        @foreach($Produtos as $produto)
                            
                            <option value="{{ $produto->id_produtos }}" style="width:150px">
                                {{ $produto->nome }}
                            </option>  
                        @endforeach          
                             
                    </select>
                <label for="precocompra">preço de compra</label><br>
                <input type="text" class="form-control" name="precocompra" id="precocompra" style="width:150px"><br><br>
            </div>  

             <div class="col">
                @if($errors->any())
                    <div class="alert alert-danger">
           
                    @foreach($errors->all() as $error)

                        <label>{{$error}}</label>
                    @endforeach
      
                    </div>

                @endif
            </div>
           
        </form>

        </div>

@endsection('conteudo')
@section('footer')

@endsection('footer')