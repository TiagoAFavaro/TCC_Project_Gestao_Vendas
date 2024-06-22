@extends('layouts.app')

@section('title', 'Visualização de Fornecedor')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="sub_header">
            <h4>Visualização de Fornecedor</h4>
            <div class="navegador">
                <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
                <a href="/home">Início</a>
                <span class="separator">&gt;</span>
                <a href="/fornecedores/list">Clientes</a>
                <span class="separator">&gt;</span>
                <a href="/visualizarForecedor">Visualizar</a>
            </div>
        </div>
        <br>
        <h1>"Nome do fornecedor"</h1>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Nome</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CNPJ</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Contato</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Telefone</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>CEP</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Endereço</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Número</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Bairro</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Cidade</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Estado</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>
@endsection
