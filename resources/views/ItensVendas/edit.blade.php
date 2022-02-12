@extends('layouts.main')
@extends('layouts.app')


@section('conteudo')




<body>
	
		
	<form action="{{route('itensVenda.update', ['id' => $ItensVendas->id])}}
" method="post">
	<div class="row g-3">
 		<div class="col">

		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		
		@csrf
		@method('PUT')
		@section('titulo','Edição de Vendas')

		
		{{-- Form Section 1 --}}
		<label>preco de compra</label>
		<input class="form-control" type="text" name="quantidade_itens" value="{{$ItensVendas->quantidade_itens}}">
		
		<label>desconto</label>
		<input class="form-control" type="text" name="desconto" value="{{$ItensVendas->desconto}}">
		
		<label>valor</label>
		<input class="form-control" type="text" name="valor" value="{{$ItensVendas->valor}}"><br>
		
	
		<input type="submit" class="btn btn-primary" value="editar">

	</form>


	</div>
</div>
	
@endsection('conteudo')
@section('footer')

@endsection('footer')