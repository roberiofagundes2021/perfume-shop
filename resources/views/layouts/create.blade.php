@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')


<div class="row g-3">
      
    <div class="col">
        <h4>Cadastro de fornecedor</h4>
        <form action="{{route('fornecedor.store')}}" method="post">
            @csrf
            <label for="razaosocial">razao social</label><br>
                <input class="form-control" type="text" name="razaosocial" id="razaosocial">
            <label for="CNPJ">CNPJ</label><br>
                <input class="form-control" type="text" name="CNPJ" id="CNPJ"><br><br>
                <input type="submit" class="btn btn-primary" value="cadastrar">
        </form>
    </div>


    <div class="col">
        @if($errors->any())
            <div class="alert alert-danger">
                    @foreach($errors->all() as $error)

                        <label>{{$error}}</label>
                    @endforeach
    
                
            </div>

        @endif
            
    </div>

</div>



@endsection('conteudo')
@section('footer')

@endsection('footer')
