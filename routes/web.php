<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;

use App\Http\Controllers\ClienteController;

use App\Http\Controllers\ContatoController;

use App\Http\Controllers\DevolucaoController;

use App\Http\Controllers\EnderecoClienteController;

use App\Http\Controllers\EntradaController;

use App\Http\Controllers\FormaPagamentoController;

use App\Http\Controllers\FornecedorController;

use App\Http\Controllers\ItensEntradaController;

use App\Http\Controllers\ItensVendasController;

use App\Http\Controllers\MarcaController;

use App\Http\Controllers\PagamentoController;

use App\Http\Controllers\ParcelasController;

use App\Http\Controllers\PrateleiraController;

use App\Http\Controllers\ProdutoController;

use App\Http\Controllers\VendaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'categorias'], function(){

    Route::get('/index/categorias',[CategoriaController::class,'index'])->name('categoria.index');
    Route::post('/create/categoria',[CategoriaController::class,'create'])->name('categoria.create');
    Route::get('/create/categoria',[CategoriaController::class,'create'])->name('categoria.create');
    Route::post('/storecategoria',[CategoriaController::class,'store'])->name('categoria.store');
    Route::post('/categoria/edit/{id}',[CategoriaController::class,'edit'])->name('categoria.edit');

    Route::get('/categoria/show/{id}',[CategoriaController::class,'show'])->name('categoria.show');
    Route::put('/categoria/update/{id}',[CategoriaController::class,'update'])->name('categoria.update');
    Route::delete('/categorias/{id}',[CategoriaController::class, 'destroy'])->name('categoria.delete');
});




Route::get('/create/cliente',[ClienteController::class,'create'])->name('cliente.create');
Route::post('/create/cliente',[ClienteController::class,'create'])->name('cliente.create');

Route::post('/storecliente',[ClienteController::class,'store'])->name('cliente.store');
Route::get('/index/cliente',[ClienteController::class,'index'])->name('cliente.index');
Route::delete('/cliente/{id}',[ClienteController::class,'destroy'])->name('cliente.delete');
Route::post('/cliente/edit/{id}',[ClienteController::class,'edit'])->name('cliente.edit');
Route::put('/cliente/update/{id}',[ClienteController::class,'update'])->name('cliente.update');



Route::get('/create/devolucao',[DevolucaoController::class,'create'])->name('devolucao.create');
Route::post('/create/devolucao',[DevolucaoController::class,'create'])->name('devolucao.create');

Route::post('/storedevolucao',[DevolucaoController::class,'store'])->name('devolucao.store');
Route::get('/index/devolucao',[DevolucaoController::class,'index'])->name('devolucao.index');
Route::delete('/devolucao/{id}',[DevolucaoController::class,'destroy'])->name('devolucao.delete');
Route::post('/devolucao/edit/{id}',[DevolucaoController::class,'edit'])->name('devolucao.edit');
Route::put('/devolucao/update/{id}',[DevolucaoController::class,'update'])->name('devolucao.update');


Route::get('/create/entradas',[EntradaController::class,'create'])->name('entradas.create');
Route::post('/create/entradas',[EntradaController::class,'create'])->name('entradas.create');
Route::post('/storeentradas',[EntradaController::class,'store'])->name('entradas.store');
Route::get('index/entrada',[EntradaController::class,'index'])->name('entradas.index');
Route::delete('/entrada/{id}',[EntradaController::class,'destroy'])->name('entradas.delete');
Route::put('/entrada/update/{id}',[EntradaController::class,'update'])->name('entradas.update');
Route::post('/entrada/edit/{id}',[EntradaController::class,'edit'])->name('entradas.edit');

Route::get('/create/enderecocliente',[EnderecoClienteController::class,'create'])->name('enderecos.create');
Route::post('/create/enderecocliente',[EnderecoClienteController::class,'create'])->name('enderecos.create');
Route::post('/storeenderecoscliente',[EnderecoClienteController::class,'store'])->name('enderecos.store');
Route::get('index/enderecoscliente',[EnderecoClienteController::class,'index'])->name('enderecos.index');
Route::delete('/enderecoscliente/{id}',[EnderecoClienteController::class,'destroy'])->name('enderecos.delete');
Route::put('/enderecoscliente/update/{id}',[EnderecoClienteController::class,'update'])->name('enderecos.update');
Route::post('/enderecoscliente/edit/{id}',[EnderecoClienteController::class,'edit'])->name('enderecos.edit');



Route::get('/create/enderecocliente',[EnderecoClienteController::class,'create'])->name('enderecos.create');
Route::post('/create/enderecocliente',[EnderecoClienteController::class,'create'])->name('enderecos.create');
Route::post('/storeenderecoscliente',[EnderecoClienteController::class,'store'])->name('enderecos.store');
Route::get('index/enderecoscliente',[EnderecoClienteController::class,'index'])->name('enderecos.index');
Route::delete('/enderecoscliente/{id}',[EnderecoClienteController::class,'destroy'])->name('enderecos.delete');
Route::put('/enderecoscliente/update/{id}',[EnderecoClienteController::class,'update'])->name('enderecos.update');
Route::post('/enderecoscliente/edit/{id}',[EnderecoClienteController::class,'edit'])->name('enderecos.edit');



Route::get('/create/formapagamento',[FormaPagamentoController::class,'create'])->name('formapagamento.create');
Route::post('/create/formapagamento',[FormaPagamentoController::class,'create'])->name('formapagamento.create');
Route::post('/storeformapagamento',[FormaPagamentoController::class,'store'])->name('formapagamento.store');
Route::get('index/formapagamento',[FormaPagamentoController::class,'index'])->name('formapagamento.index');
Route::delete('/formapagamento/{id}',[FormaPagamentoController::class,'destroy'])->name('formapagamento.delete');
Route::put('/formapagamento/update/{id}',[FormaPagamentoController::class,'update'])->name('formapagamento.update');
Route::post('/formapagamento/edit/{id}',[FormaPagamentoController::class,'edit'])->name('formapagamento.edit');

Route::get('/create/formapagamento',[FornecedorController::class,'create'])->name('formapagamento.create');
Route::post('/create/formapagamento',[FornecedorController::class,'create'])->name('formapagamento.create');
Route::post('/storeformapagamento',[FornecedorController::class,'store'])->name('formapagamento.store');
Route::get('index/formapagamento',[FornecedorController::class,'index'])->name('formapagamento.index');
Route::delete('/formapagamento/{id}',[FornecedorController::class,'destroy'])->name('formapagamento.delete');
Route::put('/formapagamento/update/{id}',[FornecedorController::class,'update'])->name('formapagamento.update');
Route::post('/formapagamento/edit/{id}',[FornecedorController::class,'edit'])->name('formapagamento.edit');


Route::get('/create/fornecedor',[FornecedorController::class,'create'])->name('fornecedor.create');
Route::post('/create/fornecedor',[FornecedorController::class,'create'])->name('fornecedor.create');
Route::post('/storefornecedor',[FornecedorController::class,'store'])->name('fornecedor.store');
Route::get('index/fornecedor',[FornecedorController::class,'index'])->name('fornecedor.index');
Route::delete('/fornecedors/{id}',[FornecedorController::class, 'destroy'])->name('fornecedors.delete');
Route::put('/fornecedors/update/{id}',[FornecedorController::class,'update'])->name('fornecedors.update');
Route::post('/fornecedors/edit/{id}',[FornecedorController::class,'edit'])->name('fornecedors.edit');


Route::get('/create/itensentradas',[ItensEntradaController::class,'create'])->name('itensentradas.create');
Route::post('/create/itensentradas',[ItensEntradaController::class,'create'])->name('itensentradas.create');
Route::post('/storeitensentradas',[ItensEntradaController::class,'store'])->name('itensentradas.store');
Route::get('index/itensentradas',[ItensEntradaController::class,'index'])->name('ItensEntradas.index');
Route::get('/itensentradas/{id}',[ItensEntradaController::class,'destroy'])->name('itensentradas.delete');
Route::put('/itensentradas/update/{id}',[ItensEntradaController::class,'update'])->name('itensentradas.update');
Route::post('/itensentradas/edit/{id}',[ItensEntradaController::class,'edit'])->name('itensentradas.edit');



Route::get('/create/itensvendas',[ItensVendasController::class,'create'])->name('itensvendas.create');
Route::post('/create/itensvendas',[ItensVendasController::class,'create'])->name('itensvendas.create');
Route::post('/storeitensvendas',[ItensVendasController::class,'store'])->name('itensvendas.store');
Route::get('/storeitensvendas',[ItensVendasController::class,'store'])->name('itensvendas.store');
Route::get('index/itensVenda',[ItensVendasController::class,'index'])->name('itensVendas.index');
Route::delete('/itensVenda/{id}',[ItensVendasController::class,'destroy'])->name('itensVenda.delete');
Route::put('/itensVenda/update/{id}',[ItensVendasController::class,'update'])->name('itensVenda.update');
Route::post('/itensVenda/edit/{id}',[ItensVendasController::class,'edit'])->name('itensVenda.edit');


Route::get('/create/marca',[MarcaController::class,'create'])->name('marca.create');
Route::post('/create/marca',[MarcaController::class,'create'])->name('marca.create');
Route::post('/storemarca',[MarcaController::class,'store'])->name('marca.store');
Route::get('index/marcas',[MarcaController::class,'index'])->name('marca.index');
Route::delete('/marcas/{marca_id}',[MarcaController::class,'destroy'])->name('marca.delete');
Route::put('/marcas/update/{id}',[MarcaController::class,'update'])->name('marca.update');
Route::post('/marcas/edit/{id}',[MarcaController::class,'edit'])->name('marca.edit');


Route::get('/create/pagamento',[PagamentoController::class,'create'])->name('pagamento.create');
Route::post('/create/pagamento',[PagamentoController::class,'create'])->name('pagamento.create');
Route::post('/storepagamento',[PagamentoController::class,'store'])->name('pagamento.store');
Route::get('index/pagamento',[PagamentoController::class,'index'])->name('pagamento.index');
Route::delete('/pagamento/{pagamento_id}',[PagamentoController::class,'destroy'])->name('pagamento.delete');
Route::put('/pagamento/update/{id}',[PagamentoController::class,'update'])->name('pagamento.update');
Route::post('/pagamento/edit/{id}',[PagamentoController::class,'edit'])->name('pagamento.edit');






Route::get('/create/parcelas',[ParcelasController::class,'create'])->name('parcelas.create');
Route::post('/create/parcelas',[ParcelasController::class,'create'])->name('parcelas.create');
Route::post('/storeparcelas',[ParcelasController::class,'store'])->name('parcelas.store');
Route::get('index/parcelas',[ParcelasController::class,'index'])->name('parcelas.index');
Route::delete('/parcelas/{pagamento_id}',[ParcelasController::class,'destroy'])->name('parcelas.delete');
Route::put('/parcelas/update/{id}',[ParcelasController::class,'update'])->name('parcelas.update');
Route::post('/parcelas/edit/{id}',[ParcelasController::class,'edit'])->name('parcelas.edit');




Route::get('/create/prateleira',[PrateleiraController::class,'create'])->name('prateleira.create');

Route::post('/create/prateleira',[PrateleiraController::class,'create'])->name('prateleira.create');

Route::post('/storeprateleira',[PrateleiraController::class,'store'])->name('prateleira.store');

Route::get('index/prateleira',[PrateleiraController::class,'index'])->name('prateleira.index');

Route::delete('/prateleira/{pratelleira_id}',[PrateleiraController::class,'destroy'])->name('prateleira.delete');

Route::put('/prateleira/update/{id}',[PrateleiraController::class,'update'])->name('prateleira.update');

Route::post('/prateleira/edit/{id}',[PrateleiraController::class,'edit'])->name('prateleira.edit');



Route::get('/create/produto',[ProdutoController::class,'create'])->name('produto.create');
Route::post('/create/produto',[ProdutoController::class,'create'])->name('produto.create');
Route::post('/storeproduto',[ProdutoController::class,'store'])->name('produto.store');
Route::get('index/produto',[ProdutoController::class,'index'])->name('produto.index');
Route::delete('/produto/{id}',[ProdutoController::class,'destroy'])->name('produto.delete');
Route::put('/produto/update/{id}',[ProdutoController::class,'update'])->name('produto.update');
Route::post('/produto/edit/{id}',[ProdutoController::class,'edit'])->name('produto.edit');


Route::post('/create/vendas',[VendaController::class,'create'])->name('vendas.create');
Route::get('/create/vendas',[VendaController::class,'create'])->name('vendas.create');
Route::post('/storevendas',[VendaController::class,'store'])->name('vendas.store');
Route::get('index/vendas',[VendaController::class,'index'])->name('vendas.index');
Route::delete('/vendas/{id}',[VendaController::class,'destroy'])->name('vendas.delete');
Route::put('/vendas/update/{id}',[VendaController::class,'update'])->name('vendas.update');
Route::post('/vendas/edit/{id}',[VendaController::class,'edit'])->name('vendas.edit');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
