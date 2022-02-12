
@extends('layouts.main')
@extends('layouts.app')
@section('conteudo')



<body>
	<form action="{{route('vendas.update', ['id' => $Venda->id])}}
" method="post">
		@section('titulo','Edição de Venda')
		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		<div align="justify">
			<h4>Edição de venda</h4><br>
			@csrf
		@method('PUT')

<div class="row g-3">
		
	<div class="col">
		<label>data_venda</label>
		<input type="text" class="form-control" name="datavenda" value="{{$Venda->datavenda}}" style="width:150px"> 
		<label>valor total</label>
		<input type="text" class="form-control" name="valortotal" value="{{$Venda->valortotal}}" style="width:150px"><br>

		<input type="submit" class="btn btn-primary" value="editar">
	</div>
	<div class="col">
		<label>desconto total</label>
		<input type="text" class="form-control" name="descontototal" value="{{$Venda->descontototal}}" style="width:150px">

		<label>desconto acerto</label>
		<input type="text" class="form-control" name="descontoacerto" value="{{$Venda->descontoacerto}}" style="width:150px"><br><br>

			
	</div>
		
	</form>
</div>

@endsection('conteudo')
@section('footer')

@endsection('footer')