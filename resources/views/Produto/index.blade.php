@extends('layouts.main')
@extends('layouts.app-index')



@section('conteudo')

    
    <table class="table table-sm">
       
        <thead>
            @section('titulo','produtos')
            <th>icms</th>
            <th>ipi</th>
            <th>frete</th>
            <th>valornafabrica</th>

            <th>valordecompra</th>
            <th>lucro</th>
            <th>valordevenda</th>
            <th>desconto</th>
            <th>quantidade</th>
            <th>datavencimento</th>  
            <th>nome do produto</th> 
                   
        </thead>
        <thead>
            @foreach ($Produto as $Produto )
            <td>{{$Produto->icms}} </td>
            <td>{{$Produto->ipi}}</td>
            <td>{{$Produto->frete}}</td>
            <td>{{$Produto->valornafabrica}}</td>
            
            <td>{{$Produto->valordecompra}}</td>
            <td>{{$Produto->lucro}}</td>
            <td>{{$Produto->valordevenda}}</td>
            <td>{{$Produto->desconto}}</td>
            <td>{{$Produto->quantidade}}</td>
            <td>{{$Produto->datavencimento}}</td>
             <td>{{$Produto->nome}}</td>
        </thead>
        <thead>
         <td>
                   <form action="{{route('produto.delete', ['id' => $Produto->id])}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form> 
                </td>
                <td>
                    <form action="{{route('produto.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('produto.edit', ['id' => $Produto->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>   
        </thead>
                
                 @endforeach
        </thead>
        </div>
      
    </table>



@endsection('conteudo')
@section('footer')

@endsection('footer')
