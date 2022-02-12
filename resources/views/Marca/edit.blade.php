@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')






<body>
	
	
	<form action="{{route('marca.update', ['id' => $Marcas->id])}}
" method="post">
	<div class="row g-3">
			<h4>edição de marca</h4><br>
		<div class="col">
			
				{{--  entradas.update vem da rota update do name --}}
			{{--  a variavel $Entrada vem do controller no metodo edit --}}
			
			@csrf
			@method('PUT')
			

			
			{{-- Form Section 1 --}}
			<label>nome da marca</label><br>
			<input type="text" class="form-control" name="nome" value="{{$Marcas->nome}}"><br><br>
		
		
			<input type="submit" class="btn btn-primary" value="editar">
		</div>
	</div>
		

	</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')