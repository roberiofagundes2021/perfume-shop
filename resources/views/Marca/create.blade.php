
@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')

   

    
        
        <form action="{{route('marca.store')}}" method="post">
            <div class="row g-3">
                 <h4>pagina de cadastro de marca</h4>
                    <div class="col">
                        @csrf
                       
                        <label for="nome">nome</label><br><br>
                        <input type="text" class="form-control" name="nome" id="nome"><br><br>
                        <input type="submit" class="btn btn-primary" value="cadastrar">
            
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
        </form>

@endsection('conteudo')
@section('footer')

@endsection('footer')
