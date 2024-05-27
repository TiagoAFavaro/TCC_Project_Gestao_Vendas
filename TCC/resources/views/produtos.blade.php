@extends('layouts.app')

@section('title', 'Produtos')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-registration-pages.css') }}">
@endpush

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="sub_header">
            <h1 style="margin: 5px; display: inline-block;">
                <span class="align-middle">
                    <img src="{{ asset('/img/customer.png') }}" class="page_icon img-fluid icon-img" alt="Ícone">
                </span>
                Produtos
            </h1>
            <div class="navegador">
                <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
                <a href="/home">Início</a>
                <span class="separator">&gt;</span>
                <a href="#">Produtos</a>
            </div>
        </div>

        <div class="container_cliente">
            <div class="botoes">
                <a href="/cadastrar-produtos">
                    <button class="botoes_cliente" style="background-color: green;">
                        <img src="{{ asset('/img/plus.png') }}" alt="Mais">
                        Adicionar
                    </button>
                </a>
            </div>

            <div class="caixa_pesquisa">
                <input type="text" id="input_pesquisa" placeholder="Buscar por nome">
                <button id="botao_pesquisa">
                    <img src="{{ asset('/img/lupa.png') }}" alt="Pesquisar">
                </button>
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>DESCRIÇÃO</th>
                    <th>PREÇO</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
        </table>
        </form>
        <br>
        Mostrando 1 a 1 de um total de 1
    </main>
@endsection