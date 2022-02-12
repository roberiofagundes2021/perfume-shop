@extends('layouts.main')
@extends('layouts.app-index')





@section('conteudo')



<table class="table table-sm">
    @section('titulo','Marca')
  @foreach ($Marca as $Marca) 
    <div id="row">
        <thead>        
            <th>nome</th>
            <th></th>
            <th></th>
            <th></th>
            
        </thead>
         <thead>
            <td>{{$Marca->nome}}</td>
                <td align="center">
                   <form action="../marcas/{{$Marca->marca_id}}" method="post">
                    @csrf
                    @method('DELETE')   
                    <input type="submit" class="btn btn-primary" value="deletar">

                    </form> 
                </td>
                
                <td>
                    <form action="{{route('marca.create')}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="novo">
                    </form>
                </td>

                <td>
                    <form action="{{route('marca.edit', ['id' => $Marca->id])}}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-primary" name="formulario" value="alterar">
                    </form>
                </td>
            </thead>
 
         </div>
    
    </div>
@endforeach  
</table>


@endsection('conteudo')
@section('footer')

@endsection('footer')
