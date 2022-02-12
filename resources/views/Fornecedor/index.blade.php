@extends('layouts.main')
@extends('layouts.app-index')





@section('conteudo')
<div>


</div>

<table class="table table-sm">
   @section('titulo','Fornecedor')
@foreach ($Fornecedors as $Fornecedor)


    <thead>
        <th>nome</th>
        <th>cpnj</th>
        <th></th>
        <th></th>
        <th></th>
    </thead>
</div>
    <thead>
        <td> {{$Fornecedor->razaosocial}}</td>
        <td>{{$Fornecedor->cnpj}}</td>

         <td>
            <form action="{{route('fornecedor.create')}}" method="post">
                @csrf
                <input type="submit" class="btn btn-primary" name="formulario" value="novo">
            </form>
         </td>

          <td>
            <form action="{{route('fornecedors.edit', ['id' => $Fornecedor->id])}}" method="post">
                @csrf
                <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
            </form>
         </td>

         <td>
            <form action="{{route('fornecedors.delete', ['id' => $Fornecedor->id])}}" method="post">
                @csrf
                @method('DELETE')
                <div id="button">
                <input type="submit" class="btn btn-primary" name="formulario"  value="deletar">
                </div>

            </form>
         </td>
    </thead>

@endforeach
    </div>

</table>
@endsection('conteudo')
@section('footer')

@endsection('footer')
