
@extends('layouts.main')

@section('titulo','Perfume-Shop')


@section('conteudo')
  

    <div class="row g-3">

          <div class="col">
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{$error}}</li>
                    @endforeach
                </ul>
                
            </div>

        @endif
            
        </div>
        <div class="col">
            <form action="{{route('cliente.store')}}" method="post">
                <div>
                     @csrf
                
                <label for="nome">nome</label><br>
                    <input type="text" name="nome" id="nome"><br>

                <label for="endereco">endereco</label><br>
                    <input type="text" name="endereco" id="endereco"><br>

                <label for="debito">debito</label><br>
                    <input type="text" name="debito" id="debito"><br><br>

            <input type="submit" class="btn btn-primary" value="cadastrar">    
            </form>

        </div><br>
    <div>
        

@endsection('conteudo')

@section('footer')

@endsection('footer')