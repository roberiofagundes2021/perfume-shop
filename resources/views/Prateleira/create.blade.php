
@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')


@if($errors->any())
                        <div class="alert alert-danger">
                       
                            @foreach($errors->all() as $error)

                                <label>{{$error}}</label><br>
                            @endforeach
                        
                        </div>

                    @endif
<form action="{{route('vendas.store')}}" method="post">
   <div class="row g-3">

    <h4>cadastro de venda</h4><br>
        <div class="col">
             @csrf
            <label for="nome">descontototal</label>
            <input class="form-control" type="text" name="descontototal" id="descontototal" style="width:150px">

            <label for="descontoacerto">descontoacerto</label>
            <input class="form-control" type="text" name="descontoacerto" id="descontoacerto" style="width:150px">

            <label for=" data_venda"> data_venda</label>
            <input class="form-control" type="date" name=" data_venda" id=" data_venda" style="width:150px">

    
            <label for="clientes">cliente</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
                <select class="form-control" name="cliente_id" style="width:150px">
                    @foreach($Clientes as $cliente)
                    <option  value="{{ $cliente->cliente_id}}">
                        {{ $cliente->nome }}
                    </option>
                     @endforeach
                </select>
        

          <div class="col">
            @if($errors->any())
            <div class="alert alert-danger">
           
                    @foreach($errors->all() as $error)

                        <label>{{$error}}</label><br>
                    @endforeach
          
                
            </div>

             @endif
            
        </div><br>
    
<input type="submit" class="btn btn-primary" value="cadastrar">
</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')