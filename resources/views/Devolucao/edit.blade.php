@extends('layouts.main')

@section('titulo','Perfume-Shop')
@section('conteudo')



<body>
	

	<form action="{{route('vendas.update', ['id' => $Vendas->id])}}
" method="post">

		{{--  entradas.update vem da rota update do name --}}
		{{--  a variavel $Entrada vem do controller no metodo edit --}}
		<div align="justify">
			<h4>Edição de venda</h4><br>
			@csrf
		@method('PUT')
		

	
		<label>data_venda</label>
		<input type="text" class="form-control" name="data_venda" value="{{$Vendas->data_venda}}" style="width:150px"> 
		
		<label>valor total</label>
		<input type="text" class="form-control" name="valortotal" value="{{$Vendas->valortotal}}" style="width:150px"><br><br>
		
		<label>desconto total</label>
		<input type="text" class="form-control" name="descontototal" value="{{$Vendas->descontototal}}" style="width:150px">

		<label>desconto acerto</label>
		<input type="text" class="form-control" name="descontoacerto" value="{{$Vendas->descontoacerto}}" style="width:150px"><br><br>

		<input type="submit" class="btn btn-primary" value="editar">

		</div>
		
	</form>


@endsection('conteudo')
@section('footer')

@endsection('footer')