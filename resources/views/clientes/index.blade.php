
@extends('layouts.main')
@extends('layouts.app-index')






@section('conteudo')

    
    
   <table class="table table-sm">
    @section('titulo','Clientes')

    
    @foreach ($Cliente as $cliente)

      <thead>
        <tr>
          <th scope="col">nome do cliente </th>
          <th>debito</th>
          <th>cpf</th>
          <th>sexo</th>
          <th>datanascimento</th>
          <th></th>
          <th></th>
          <th></th>
          <th></th>

      </thead>
      <thead>
         <td scope="row">{{$cliente->nome}} 
            
         <td>{{$cliente->debito}} 
              
         <td>{{$cliente->cpf}}</td>
         <td>{{$cliente->sexo}}</td>
         <td>{{$cliente->datanascimento}}</td>
         <td class="tabela">
             <td>
            <form action="{{route('cliente.create')}}" method="post">
                @csrf 
                <input type="submit" class="btn btn-primary" name="formulario" value="novo">
            </form>
         </td>

          <td>
            <form action="{{route('cliente.edit', ['id' => $cliente->id])}}" method="post">
                @csrf 
                <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
            </form>
         </td>
         <td>
            <form action="../cliente/{{$cliente->id}}" method="post">
                @csrf
                @method('DELETE')   
                <div id="button">
                    <input type="submit" class="btn btn-primary" name="formulario"  value="deletar">
                </div>
               
            </form>
         </td>
      </thead>
       @endforeach

    </table>

    

   
@endsection('conteudo')


