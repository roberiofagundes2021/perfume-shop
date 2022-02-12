
@extends('layouts.main')





@section('titulo','Perfume-Shop')
@section('conteudo')
@extends('layouts.main')

    <div>
        <h4>Tabela de vendas</h4>
    </div><br>
     <table class="table table-sm">


        @foreach ($Venda as $venda)
        <thead>
            <th>data da venda</th>
            <th>desconto total</th>
            <th>desconto acerto</th>
            <th>valor total</th>
            <th></th>
             <th></th>
              <th></th>

        </thead>
        <thead>
            <td>{{$venda->data_venda}}</td>
            <td>{{$venda->descontototal}}</td>
            <td>{{$venda->descontoacerto}}</td>
            <td>{{$venda->valortotal}}</td>
            <td>
                   <form action="{{route('vendas.delete', ['id' => $venda->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-primary" value="deletar">
                    </form>
                </td>
                <td>
                    <form action="{{route('vendas.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>
                <td>
                    <form action="{{route('vendas.edit', ['id' => $venda->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>

        </thead>
    </table>



    @endforeach





@endsection('conteudo')
@section('footer')

@endsection('footer')
