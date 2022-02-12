@extends('layouts.main')
@extends('layouts.app-index')





@section('conteudo')





    <table class="table table-sm">
        @section('titulo','Categoria')
            @foreach ($Categoria as $categoria)
                <thead>
                    <tr>

                          <th>nome</th>
                          <th></th>
                          <th></th>
                          <th></th>
                    </tr>
                </thead>


                    <td>{{$categoria->nome}}</td>

                        <td>
                            <form action="{{route('categoria.delete', ['id' => $categoria->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-primary" value="deletar">
                            </form>
                        </td>
                        <td>
                            <form action="{{route('categoria.create')}}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                            </form>
                        </td>
                        <td>
                            <form action="{{route('categoria.edit', ['id' => $categoria->id])}}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                            </form>
                        </td>

            @endforeach


    </table>





@endsection('conteudo')

@section('footer')

@endsection('footer')




