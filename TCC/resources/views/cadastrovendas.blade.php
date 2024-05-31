@extends('layouts.app_sem_sidebar')

@section('title', 'Cadastro de Vendas')
    
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
    <div class="sub_header">
        <h4>Cadastre a sua Venda</h4>
        <div class="navegador">
            <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
            <a href="/home">Início</a>
            <span class="separator">&gt;</span>
            <a href="vendas">Vendas</a>
            <span class="separator">&gt;</span>
            <a href="/cadastrar-vendas">Cadastro de Vendas</a>
        </div>
    </div>
    <br>
    <div class="cadastro">
        <div style="display: flex;">
            <img src="{{ asset('/img/edit.png') }}">
            <h5>Cadastro de Vendas</h5>
        </div>
        <hr>
        <div class="forms">
            <form id="cadastrarVendas">
            @csrf
                <div class="table_form">
                    <label class="obg" for="cliente_id">Cliente</label>
                    <input type="text" id="cliente_id" name="cliente_id" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="produtos_id">Produtos</label>
                    <input type="text" id="produtos_id" name="produtos_id" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="situacao">Situação</label>
                    <input type="text" id="situacao" name="situacao" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="dataEntregaMercadoria">Data de Entrega da Mercadoria</label>
                    <input type="date" id="dataEntregaMercadoria" name="dataEntregaMercadoria" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="dataRecebimento">Data de Recebimento</label>
                    <input type="date" id="dataRecebimento" name="dataRecebimento" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="detalhes">Detalhes</label>
                    <textarea id="detalhes" name="detalhes" required></textarea>
                </div>
                <div class="table_form">
                    <label class="obg" for="quantidade">Quantidade</label>
                    <input type="number" id="quantidade" name="quantidade" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="valor">Valor</label>
                    <input type="number" id="valor" name="valor" step="0.01" required>
                </div>
                <div class="table_form">
                    <label for="desconto">Desconto</label>
                    <input type="number" id="desconto" name="desconto" step="0.01">
                </div>
                <div class="table_form">
                    <label class="obg" for="subtotal">Subtotal</label>
                    <input type="number" id="subtotal" name="subtotal" step="0.01" required>
                </div>
                <div class="table_form">
                    <label for="observacoes">Observações</label>
                    <textarea id="observacoes" name="observacoes"></textarea>
                </div>
                <div class="table_form">
                    <label class="obg" for="valorTotal">Valor Total</label>
                    <input type="number" id="valorTotal" name="valorTotal" step="0.01" required>
                </div>
                <div class="button-container">
                    <button type="submit">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
@endsection
