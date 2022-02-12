@extends('layouts.main')
@extends('layouts.app')
@section('conteudo')





<body>
	
	
	<form action="{{route('itensentradas.update', ['id' => $ItensEntrada->id])}}
" method="post">
		<div class="row g-3">
			@section('titulo','Edição de Itens Entradas')
			<div class="col">

				{{--  entradas.update vem da rota update do name --}}
				{{--  a variavel $Entrada vem do controller no metodo edit --}}
				
				@csrf
				@method('PUT')
				{{-- Form Section 1 --}}
				<label>preco de compra</label>
				<input type="text" class="form-control" name="precocompra" value="{{$ItensEntrada->precocompra}}" style="width:150px">
				
				<label>quantidade</label>
				<input type="text" class="form-control" name="quantidade" value="{{$ItensEntrada->quantidade}}" style="width:150px">
				
				<label>unidade</label>
				<input type="text" class="form-control" name="unidade" value="{{$ItensEntrada->unidade}}" style="width:150px"><br>
				<input type="submit" class="btn btn-primary" value="editar">	
			</div>
			<div class="col">
					<label>ipi</label>
					<input type="text" class="form-control" name="ipi" value="{{$ItensEntrada->ipi}}" style="width:150px">
					
					<label>frete</label>
					<input type="text" class="form-control" name="frete" value="{{$ItensEntrada->frete}}" style="width:150px">
					
					<label>icms</label>
					<input type="text" name="icms" class="form-control" value="{{$ItensEntrada->icms}}" style="width:150px"><br><br>
					
			</div>
		</div>
	</form>
	


@endsection('conteudo')
@section('footer')

@endsection('footer')