

@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')

	<form action="{{route('cliente.update', ['id' => $cliente->id])}}" method="post">

		@csrf
		@method('PUT')
		

		<label for="nome">nome do cliente</label>
		<input type="text" name="nome" value="{{$cliente->nome}}">

		<input type="submit" class="btn btn-primary" value="editar">
		

	</form>
		

@endsection('conteudo')
@section('footer')

@endsection('footer')
	





