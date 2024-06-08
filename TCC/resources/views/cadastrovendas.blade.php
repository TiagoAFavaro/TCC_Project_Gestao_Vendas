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
    <!-- <div class="cadastro">
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
    </div> -->

    <div class="cadastro">
        <div style="display: flex;">
            <img src="{{ asset('/img/edit.png') }}">
            <h5>Dados Gerais</h5>
        </div>
        <hr>
        <div class="forms">
            <form id="cadastrarVendas">
                @csrf
                <div class="table_form">
                    <label class="obg" for="cliente_nome">Cliente</label>
                    <input type="text" id="cliente_nome" name="cliente_nome" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_rua">Rua</label>
                    <input type="text" id="endereco_rua" name="endereco_rua" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_numero">Número</label>
                    <input type="text" id="endereco_numero" name="endereco_numero" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_bairro">Bairro</label>
                    <input type="text" id="endereco_bairro" name="endereco_bairro" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_cidade">Cidade</label>
                    <input type="text" id="endereco_cidade" name="endereco_cidade" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="endereco_estado">Estado</label>
                    <input type="text" id="endereco_estado" name="endereco_estado" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="data_entrega">Data de Entrega</label>
                    <input type="date" id="data_entrega" name="data_entrega" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="data_retorno">Data de Retorno</label>
                    <input type="date" id="data_recebimento" name="data_recebimento" required>
                </div>
                <div class="table_form">
                    <label class="obg" for="situacao">Situação</label>
                    <select id="situacao" name="situacao" required>
                        <option value="paga">Paga</option>
                        <option value="em_aberto">Em Aberto</option>
                        <option value="a_pagar">A Pagar</option>
                    </select>
                </div>
            </form>
        </div>
    </div>

    <div class="cadastro">
    <div style="display: flex;">
        <h5>Cadastro de Vendas</h5>
    </div>
    <hr>
    <div class="forms">
        <form id="cadastrarVendas">
            @csrf
            <div class="table_form">
                <label class="obg" for="produto">Produto</label>
                <input type="text" id="produto" name="produto" required>
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
            <div class="button-container">
                <button type="submit">CADASTRAR</button>
            </div>
        </form>
    </div>
</div>

@endsection
