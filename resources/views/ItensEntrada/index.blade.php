
@section('conteudo')
@extends('layouts.main')
@extends('layouts.app-index')







<table class="table table-sm">
    @section('titulo','Itens Entradas')
   <div>
        <table class="table table-sm">
            @foreach ($ItensEntrada as $ItensEntrada)
            <thead>
                <th>precocompra</th>
                <th>quantidade</th>
                <th>unidade</th>
                <th>ipi</th>
                <th>frete</th>
                <th>icms</th>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <thead>
                <td>{{$ItensEntrada->precocompra}}</td>
                <td>{{$ItensEntrada->quantidade}}</td>
                <td>{{$ItensEntrada->unidade}}</td>
                <td>{{$ItensEntrada->ipi}}</td>
                <td>{{$ItensEntrada->frete}}</td>
                <td>{{$ItensEntrada->icms}}</td>

                    <form action="{{route('itensentradas.edit', ['id' => $ItensEntrada->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" value="alterar">
                    </form>
                </td>

                <td>
                    <form action="{{route('itensentradas.delete', ['id' => $ItensEntrada->id])}}">
                    @csrf
                    @method('DELETE')

                    <input type="submit" class="btn btn-primary" value="apagar">
                    </form>
                </td>
            </thead>

        @endforeach

        <td>
            <form action="{{route('itensentradas.create')}}" method="post">
                @csrf
                <input type="submit" class="btn btn-primary" value="adicionar novo item para entrada de produto">
            </form>
         </td>

        <td>
    
</table>


@endsection('conteudo')
@section('footer')

@endsection('footer')
