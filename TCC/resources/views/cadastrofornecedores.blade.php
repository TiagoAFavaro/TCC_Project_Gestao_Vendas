@extends('layouts.app_sem_sidebar')

@section('title', 'Cadastro de Fornecedores')
    
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
    <div class="sub_header">
        <h4>Adicionar Fornecedores</h4>
        <div class="navegador">
            <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
            <a href="/home">Início</a>
            <span class="separator">&gt;</span>
            <a href="/fornecedores/list">Fornecedores</a>
            <span class="separator">&gt;</span>
            <a href="/fornecedores/cadastro">Adicionar</a>
        </div>
    </div>
    <br>
    <div class="cadastro">
        <div style="display: flex;">
            <img src="{{ asset('/img/edit.png') }}">
            <h5>Cadastro de Fornecedores</h5>
        </div>
        <hr>
        <div class="forms">
            <form id="cadastrarFornecedores" action="/criar_cadastro_fornecedores" method="post">
                @csrf
                    <div class="table_form">
                        <label class="obg" for="nome">Nome</label>
                        <input type="text" id="nome" name="nome" required>
                    </div>
                    <div class="table_form">
                        <label class="obg" for="cnpj">CNPJ</label>
                        <input type="text" id="cnpj" name="cnpj" maxlength="18" required>
                    </div>
                    <div class="table_form">
                        <label class="obg" for="contato">Contato</label>
                        <input type="text" id="contato" name="contato" required>
                    </div>
                    <div class="table_form">
                        <label class="obg" for="telefone">Telefone</label>
                        <input type="text" id="telefone" name="telefone" maxlength="15" required>
                    </div>
                    <div class="table_form">
                        <label class="obg" for="email">E-mail</label>
                        <input type="email" id="email" name="email" required>
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
                        <label for="numero">Número</label>
                        <input type="text" id="numero" name="numero">
                    </div>
                    <div class="table_form">
                        <label for="cidade">Cidade</label>
                        <input type="text" id="cidade" name="cidade">
                    </div>
                    <div class="table_form" style="margin-right: auto; margin-left: 10px;">
                        <label for="estado">Estado</label>
                        <input type="text" id="estado" name="estado">
                    </div>
                    <div class="button-container">
                        <button type="submit" style="color: white;">CADASTRAR</button>
                    </div>
            </form>
        </div>
    </div>
@endsection