@extends('layouts.main')
@extends('layouts.app-index')





@section('conteudo')
<div>
<table class="table table-sm">
<td>
                <form action="{{route('itensvendas.create')}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-primary" name="formulario" value="adicionar novo itens para a venda">
                </form>
                
       </td>



  

      
    @section('titulo','ItensVendas')
    
    @foreach ($ItensVendas as $Itens_Venda )
        <thead>
           
            <th>quantidade_itens</th>
            <th>desconto</th>
            <th>valor</th>
            <th></th>
            <th></th>
            <th></th>
        </thead>
        <thead>
            <td>{{$Itens_Venda->quantidade_itens}}</td>
            <td>{{$Itens_Venda->desconto}}</td>
            <td>{{$Itens_Venda->valor}}</td>
            <td> 
                <form action="../itensVenda/{{$Itens_Venda->id}}" method="post">
                @csrf
                @method('DELETE')   
                <input type="submit" class="btn btn-primary" value="deletar">
                </form>
            </td>
                       
            <td>
                <form action="{{route('itensVenda.edit', ['id' => $Itens_Venda->id])}}" method="post">
                    @csrf
                    <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                </form>
            </td>
             @endforeach
            
        </thead>
   
</table>

</div>



@endsection('conteudo')
@section('footer')

@endsection('footer')
