@extends('layouts.app')

@section('title', 'Visualização de Vendas')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="sub_header">
            <h4>Visualização de Vendas</h4>
            <div class="navegador">
                <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
                <a href="/dashboard">Início</a>
                <span class="separator">&gt;</span>
                <a href="/fornecedores/list">Clientes</a>
                <span class="separator">&gt;</span>
                <a href="/visualizarVendas">Visualizar</a>
            </div>
        </div>
        <br>
        <h1>"Venda número XXX"</h1>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Cliente</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Produtos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Data de Entrega</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Data de Retorno</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Situação</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Quantidade</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Detalhes</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Serviços</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Descontos</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Valor Total</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Observações</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
