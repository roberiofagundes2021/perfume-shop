

@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')

	
	<div class="row g-3">
		<h4>edição de cliente</h4>
		<div class="col">
			<form action="{{route('cliente.update', ['id' => $cliente->id])}}" method="post">

			@csrf
			@method('PUT')
			<label for="nome">nome do cliente</label>
			<input type="text" name="nome" class="form-control" value="{{$cliente->nome}}">

			<label for="nome">debito</label>
			<input type="text" name="debito" class="form-control" value="{{$cliente->debito}}">

			<label for="cpf">cpf</label>
	         <input type="text" name="cpf" class="form-control" value="{{$cliente->cpf}}"><br>

	         <input type="submit" class="btn btn-primary" value="editar">

		</div><br>
		<div class="col">
			 

	        <label for="rg">rg</label>
	        <input type="text" name="rg" class="form-control" value="{{$cliente->rg}}">


	        <label for="datanascimento">datanascimento</label>
	        <input type="date" name="datanascimento" class="form-control" value="{{$cliente->datanascimento}}">

	        <label for="sexo">sexo</label>
	        <input type="text" name="sexo" class="form-control" value="{{$cliente->sexo}}"><br><br>

	        
			</form>
		</div>
 	</div>
		
		
	
		

@endsection('conteudo')
@section('footer')

@endsection('footer')
	





