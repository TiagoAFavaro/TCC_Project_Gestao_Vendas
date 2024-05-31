@extends('layouts.app_sem_sidebar')

@section('title', 'Cadastro de Produtos')
    
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
    <div class="sub_header">
        <h4>Adicionar clientes</h4>
        <div class="navegador">
            <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
            <a href="/home">Início</a>
            <span class="separator">&gt;</span>
            <a href="/clientes/list">Clientes</a>
            <span class="separator">&gt;</span>
            <a href="">Adicionar</a>
        </div>
    </div>
    <br>
    <div class="cadastro">
        <div style="display: flex;">
            <img src="{{ asset('/img/edit.png') }}">
            <h5>Cadastro de Clientes</h5>
        </div>
        <hr>
        <div class="forms">
            <form id="cadastrarClientes" action="/criar_cadastro_clientes" method="post">
            @csrf
                <div class="table_form">
                    <label class="obg" for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" maxlength="15" required>
                </div>
                <div class="table_form">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" maxlength="14">
                </div>
                <div class="table_form">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="table_form">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" maxlength="9">
                </div>
                <div class="table_form">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco">
                </div>
                <div class="table_form">
                    <label for="numeroCasa">Número da Casa</label>
                    <input type="text" id="numeroCasa" name="numeroCasa">
                </div>
                <div class="table_form">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade">
                </div>
                <div class="table_form">
                    <label for="estado">Estado</label>
                    <input type="text" id="estado" name="estado">
                </div>
                <div class="button-container">
                    <button type="submit">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
@endsection