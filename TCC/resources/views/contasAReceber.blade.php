@extends('layouts.app')

@section('title', 'Contas a Receber')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-registration-pages.css') }}">
@endpush

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="sub_header">
            <h1>
                <span class="align-middle">
                    <img src="{{ asset('/img/wallet.png') }}" class="page_icon img-fluid icon-img" alt="Ícone">
                </span>
                Contas a Receber
            </h1>
            <div class="navegador">
                <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
                <a href="/home">Início</a>
                <span class="separator">&gt;</span>
                <a href="/contasreceber">A Receber</a>
            </div>
        </div>

        <div class="container_cliente">
            <div class="botoes">
                <a href="cadastroreceber">
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
                    <th>Descrição</th>
                    <th>Valor</th>
                    <!-- <th>Situação</th> -->
                    <th>Data de Vencimento</th>
                    <th>Juros</th>
                    <!-- <th>Detalhes</th> -->
                    <!-- <th>Quantidade</th>
                    <th>Valor</th>
                    <th>Desconto</th>
                    <th>Subtotal</th>
                    <th>Observações</th> -->
                    <th>Total</th>
                    <th>AÇÕES</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <!-- <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td> -->
                    <td>
                        <a href="/visualizarreceber">
                            <button class="btn btn-warning more-btn">
                                <img src="{{ asset('/img/more.png') }}" alt="Mais">
                            </button>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>
    </main>
@endsection
