@extends('layouts.app')

@section('title', 'Visualização de Cliente')
    
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
    <!-- <div class="sub_header">
        <h4>Visualização de Cliente</h4>
        <div class="navegador">
            <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
            <a href="/home">Início</a>
            <span class="separator">&gt;</span>
            <a href="/clientes/list">Clientes</a>
            <span class="separator">&gt;</span>
            <a href="/visualizarCliente">Visualizar</a>
        </div>
    </div> -->
    <br>
    <div class="visualizacao">
        <h1>Nome do cliente</h1>
        <hr>
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <td><label for="nome">Nome</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="telefone">Telefone</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="cpf">CPF</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-mail</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="cep">CEP</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="endereco">Endereço</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="numeroCasa">Número da Casa</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="cidade">Cidade</label></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td><label for="estado">Estado</label></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
