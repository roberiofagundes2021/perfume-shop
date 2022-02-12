
@extends('layouts.main')
@section('conteudo')



    <form action="{{route('cliente.store')}}" method="post">
        <div class="mb-3">

                    @if($errors->any())
                        <div class="alert alert-danger">

                            @foreach($errors->all() as $error)

                                <label>{{$error}}</label><br>
                            @endforeach
                    @endif

                    <h4 align="center">Cadastro de cliente</h4><br>
                    @csrf
                    <label for="nome">nome</label>
                    <input type="text" class="form-control" name="nome" id="nome">
                    <label for="debito">debito</label>
                    <input type="text" class="form-control" name="debito" id="debito">
                    <label for="cpf">cpf</label>
                    <input type="text" class="form-control" name="cpf" id="cpf">
                    <label for="rg">rg</label>
                     <input type="text" class="form-control" name="rg" id="rg">
                     <label for="sexo">sexo</label>
                    <input type="text" class="form-control" name="sexo" id="sexo">
                     <label for="datanascimento">datanascimento</label>
                      <input type="date" class="form-control" name="datanascimento" id="datanascimento">
                   <label for="debito">debito</label>
                    <input type="text" class="form-control" name="debito" id="debito"><br>
                     <input type="submit" class="btn btn-primary" value="cadastrar">
        </div>

    </div>

    </form>



@endsection('conteudo')

@section('footer')

@endsection('footer')
