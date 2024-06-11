<?php

use App\Http\Controllers\CadastroClienteController;
use App\Http\Controllers\CadastroFornecedoresController;
use App\Http\Controllers\CadastroProdutosController;
use App\Http\Controllers\CadastroVendasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//ROTA DE LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('store');
Route::get('/logout', [LoginController::class, 'destroy'])->name('logout');


//ROTA PARA CADASTRAR USUARIO
Route::get('/cadastrarusuario', [UsersController::class, 'create'])->name('cadastrarusuario');
Route::post('/cadastrarusuario', [UsersController::class, 'store'])->name('cadastrarusuariostore');


//ROTA PARA RECUPERAR SENHA
Route::get('/recuperarsenha', function () {
    return view('/recuperarSenha');
});



//TODAS AS ROTAS OU PÁGINAS QUE NECESSITAM QUE O USUÁRIO ESTEJA LOGADO, DEVEM ESTAR DENTRO DO MIDDLEWARE ABAIXO:

Route::middleware([Autenticador::class])->group(function () {


    //ROTA DE HOMEPAGE
    Route::get('/home', function () {
        return view('welcome');
    });

    // ROTA PARA PÁGINA DE VENDAS
    Route::get('/vendas', function () {
        return view('vendas');
    });

    // ROTAS CADASTRO DE CLIENTES
    Route::get('/clientes/list', [CadastroClienteController::class, 'index']);
    Route::get('/clientes/cadastro', [CadastroClienteController::class, 'paginaCadastro']);
    Route::post('/criar_cadastro_clientes', [CadastroClienteController::class, 'store']);
    Route::delete('/clientes/delete/{id}', [CadastroClienteController::class, 'destroy']);
    Route::get('/visualizarCliente', function () {
        return view('vizualizarCliente');
    });
    


    // ROTAS CADASTRO DE FORNECEDORES
    Route::get('/fornecedores/list', [CadastroFornecedoresController::class, 'index']);
    Route::get('/fornecedores/cadastro', [CadastroFornecedoresController::class, 'paginaCadastro']);
    Route::post('/criar_cadastro_fornecedores', [CadastroFornecedoresController::class, 'store']);
    Route::delete('/fornecedores/delete/{id}', [CadastroFornecedoresController::class, 'destroy']);

    // ROTAS CADASTRO DE PRODUTOS
    Route::get('/produtos/list', [CadastroProdutosController::class, 'index']);
    Route::get('/produtos/cadastro', [CadastroProdutosController::class, 'paginaCadastro']);
    Route::post('/criar_cadastro_produtos', [CadastroProdutosController::class, 'store']);
    Route::delete('/produtos/delete/{id}', [CadastroProdutosController::class, 'destroy']);

    // ROTAS CADASTRO DE VENDAS
    Route::get('/vendas/list', [CadastroVendasController::class, 'index']);
    Route::get('/vendas/cadastro', [CadastroVendasController::class, 'paginaCadastro']);
    Route::post('/criar_cadastro_vendas', [CadastroVendasController::class, 'store']);
    Route::delete('/vendas/delete/{id}', [CadastroVendasController::class, 'destroy']);

    // ROTAS VINCULAR VENDAS E PRODUTOS
    Route::get('/vendas', [CadastroVendasController::class, 'index'])->name('vendas.index');
    Route::get('/vendas/cadastrar', [CadastroVendasController::class, 'paginaCadastro'])->name('vendas.create');
    Route::post('/vendas', [CadastroVendasController::class, 'store'])->name('vendas.store');
    Route::delete('/vendas/{id}', [CadastroVendasController::class, 'destroy'])->name('vendas.destroy');
});
