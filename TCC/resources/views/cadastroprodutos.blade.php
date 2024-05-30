@extends('layouts.app_sem_sidebar')

@section('title', 'Cadastro de Produtos')
    
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
    <div class="sub_header">
        <h4>Adicionar Produtos</h4>
        <div class="navegador">
            <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
            <a href="/home">Início</a>
            <span class="separator">&gt;</span>
            <a href="/produtos/list">Produtos</a>
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
        <form id="cadastrarProdutos">
            @csrf
                <div class="table_form01">
                    <label class="obg" for="descricao">Descrição</label>
                    <input type="text" id="descricao" name="descricao" required>
                </div>
                <div class="table_form01">
                    <label class="obg" for="preco">Preço</label>
                    <input type="int" id="preco" name="preco" required>
                </div>
                <div class="button-container" style="margin-top: 20px;">
                    <button type="submit">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
@endsection