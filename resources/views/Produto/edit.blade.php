@extends('layouts.main')
@extends('layouts.app')


@section('conteudo')



	
	<form action="{{route('produto.update', ['id' => $Produto->id])}}
" method="post">
		<div class="row g-3">
			@section('titulo','Edição de produto')
			
			<div class="col">
				{{--  entradas.update vem da rota update do name --}}
				{{--  a variavel $Entrada vem do controller no metodo edit --}}
				
				@csrf
				@method('PUT')
				
				{{-- Form Section 1 --}}
				
					<label>nome</label><br>
				<input type="text" class="form-control" name="nome" value="{{$Produto->nome}}">
				
				<label>icms</label><br>
				<input type="text" class="form-control" name="icms" value="{{$Produto->icms}}">
				
				<label>ipi</label><br>
				<input type="text" class="form-control" name="ipi" value="{{$Produto->ipi}}">

				<label>frete</label><br>
				<input type="text" class="form-control" name="frete" value="{{$Produto->frete}}"><br><br>
				
				
			</div><br><br>
			<div class="col">
				<label>valor na fabrica</label><br>
				<input type="text" class="form-control" name="valornafabrica" value="{{$Produto->valornafabrica}}">

				<label>valor de compra</label><br>
				<input type="text" class="form-control" name="valordecompra" value="{{$Produto->valordecompra}}">

				<label>lucro</label><br>
				<input type="text" class="form-control" name="lucro" value="{{$Produto->lucro}}">

				<label>valor da venda</label><br>
				<input type="text" class="form-control" name="valorvenda" value="{{$Produto->valorvenda}}">
			</div><br><br>
			<div class="col">
				<label>desconto</label><br>
				<input type="text" class="form-control" name="desconto" value="{{$Produto->desconto}}">

				<label>data de vencimento</label><br>
				<input type="text" class="form-control" name="datavencimento" value="{{$Produto->datavencimento}}"><br>

				<input type="submit" class="btn btn-primary" class="btn btn-primary" value="editar">
			</div>

				
				</div>
		</div>

	</form>


	

@endsection('conteudo')
@section('footer')

@endsection('footer')