
@extends('layouts.main')
@extends('layouts.app')


@section('conteudo')

@if($errors->any())
            <div class="alert alert-danger">
           
                    @foreach($errors->all() as $error)

                        <label>{{$error}}</label><br>
                    @endforeach
          
                
            </div>

             @endif


   <div class="row g-3">
    @section('titulo','cadastro de venda')
    
        <div class="col">
        <form action="{{route('vendas.store')}}" method="post">
             @csrf
            

             <input type="submit" class="btn btn-primary" value="cadastrar">

        </div>
        <div class="col">
            <label for=" data_venda"> data_venda</label>
            <input class="form-control" type="date" name=" data_venda" id=" data_venda" style="width:150px">

    
            <label for="cliente">cliente</label>
            {{-- pega a variavel passada pelo metodo create do controller --}}
            
              
                
                <select name="cliente_id" id="cliente_id" class="form-control">
                     @foreach($Cliente as $cliente)
                        <option value="{{old('cliente_id', $cliente->id)}}"> 
                            {{$cliente->nome}} 
                        </option>
                     @endforeach
                </select>
        


          <div class="col">
        </div>
            
            
            
        </div><br>
    
</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')
