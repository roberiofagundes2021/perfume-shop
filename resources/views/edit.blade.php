@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')





<body>
	
	
	<form action="{{route('itensentradas.update', ['id' => $ItensEntradas->id])}}
" method="post">
		<div class="row g-3">
			<h4>Edição de itens entradas</h4><br>
			<div class="col">

				{{--  entradas.update vem da rota update do name --}}
				{{--  a variavel $Entrada vem do controller no metodo edit --}}
				
				@csrf
				@method('PUT')
				{{-- Form Section 1 --}}
				<label>preco de compra</label>
				<input type="text" class="form-control" name="precocompra" value="{{$ItensEntradas->precocompra}}" style="width:150px">
				
				<label>quantidade</label>
				<input type="text" class="form-control" name="quantidade" value="{{$ItensEntradas->quantidade}}" style="width:150px">
				
				<label>unidade</label>
				<input type="text" class="form-control" name="unidade" value="{{$ItensEntradas->unidade}}" style="width:150px"><br><br>
				<input type="submit" class="btn btn-primary" value="editar">	
			</div>
			<div class="col">
					<label>ipi</label>
					<input type="text" class="form-control" name="ipi" value="{{$ItensEntradas->ipi}}" style="width:150px">
					
					<label>frete</label>
					<input type="text" class="form-control" name="frete" value="{{$ItensEntradas->frete}}" style="width:150px">
					
					<label>icms</label>
					<input type="text" name="icms" class="form-control" value="{{$ItensEntradas->icms}}" style="width:150px"><br><br>
					
			</div>
		</div>
	</form>
	


@endsection('conteudo')
@section('footer')

@endsection('footer')