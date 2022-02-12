
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/styles.css'); }}">


@extends('layouts.main')

@extends('layouts.app-index')
@section('conteudo')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div id="nav">
			<ul id="menu-h">

				<li>
                    <a href="{{route('vendas.index')}}">
                        <img src="{{ URL::asset('images/VENDA.png'); }}"
                        style="width:150px; height:150px;"><br>produto
                    </a>
                    <br>

                </li>
				<li>

                    <a href="{{route('produto.index')}}">
                        <img src="{{ URL::asset('images/images.png'); }}"
                         style="width:150px; height:150px;"><br>Venda
                    </a>
                 </li>

                 <li>
                    <a href="{{route('produto.index')}}">
                        <img src="{{ URL::asset('images/itens_venda.png'); }}"
                        style="width:150px; height:150px;"><br>Itens Vendas
                    </a>
                    <br>

                 </li>

                  <li>
                    <a href="{{route('produto.index')}}">
                        <img src="{{ URL::asset('images/entrada_produto.jpeg'); }}"
                        style="width:150px; height:150px;"><br>Entrada de produto
                    </a>
                    <br>
                 </li>

                   <li>
                    <a href="{{route('produto.index')}}">
                        <img src="{{ URL::asset('images/produto.jpeg'); }}"
                        style="width:150px; height:150px;"><br>
                 produto
                    </a>

                 </li>
			</ul>
		</div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
