
@extends('layouts.main')

@section('titulo','Perfume-Shop')


@section('conteudo')

<body>
	<div class="row g-3">
        <div class="col">
           	<form action="{{route('categoria.update', ['id' => $categoria->id])}}" method="post">
				<h4>Edição de categoria</h4><br>
				@csrf
				@method('PUT')
				
					<label for="nome">nome da categoria</label>
				{{-- Form Section 1 --}}
				<input type="text" name="nome" class="form-control" value="{{$categoria->nome}}"><br>

				<input type="submit" class="btn btn-primary" value="editar">
			</form>
 		</div>
    </div>
		
			
		
		

	





</body>

@endsection('conteudo')

@section('footer')

@endsection('footer')