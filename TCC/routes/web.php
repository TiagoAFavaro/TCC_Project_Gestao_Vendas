<?php

use App\Http\Controllers\CadastroClienteController;
use App\Http\Controllers\CadastroFornecedoresController;
use App\Http\Controllers\CadastroProdutosController;
use App\Http\Controllers\CadastroVendasController;
use App\Http\Controllers\LoginController;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//ROTA DE LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('store');

//ROTA PARA CADASTRAR USUARIO
Route::get('/cadastrarusuario', function() {
    return view('criarConta');
});

//ROTA PARA RECUPERAR SENHA
Route::get('/recuperarsenha', function() {
    return view('/recuperarSenha');
});

//ROTA DE HOMEPAGE
Route::get('/home', function () {
        return view('welcome');
})->middleware(Autenticador::class);

// ROTA PARA PÁGINA DE VENDAS
Route::get('/vendas', function () {
    return view('vendas');
});

// ROTAS CADASTRO DE CLIENTES
Route::get('/clientes/list', [CadastroClienteController::class, 'index']);
Route::get('/cadastrar-cliente', function() { return view('/cadastrocliente'); }); 
Route::post('/criar_cadastro_clientes', [CadastroClienteController::class, 'store']); 
Route::delete('/clientes/delete/{id}', [CadastroClienteController::class, 'destroy']);


// ROTAS CADASTRO DE FORNECEDORES
Route::get('/fornecedores/list', [CadastroFornecedoresController::class, 'index']);
Route::get('/cadastrar-fornecedores', function() { return view('/cadastrofornecedores'); });
Route::post('/criar_cadastro_fornecedores', [CadastroFornecedoresController::class, 'store']); 
Route::delete('/fornecedores/delete/{id}', [CadastroFornecedoresController::class, 'destroy']); 

// ROTAS CADASTRO DE PRODUTOS
Route::get('/produtos/list', [CadastroProdutosController::class, 'index']);
Route::get('/cadastrar-produtos', function() { return view('/cadastroprodutos'); });
Route::post('/criar_cadastro_produtos', [CadastroProdutosController::class, 'store']); 
Route::delete('/produtos/delete/{id}', [CadastroProdutosController::class, 'destroy']); 

// ROTAS CADASTRO DE VENDAS
Route::get('/vendas/list', [CadastroVendasController::class, 'index']);
Route::get('/cadastrar-vendas', function() { return view('/cadastrovendas'); });
Route::post('/criar_cadastro_vendas', [CadastroVendasController::class, 'store']); 
Route::delete('/vendas/delete/{id}', [CadastroVendasController::class, 'destroy']);
