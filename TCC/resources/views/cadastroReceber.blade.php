@extends('layouts.app_sem_sidebar')

@section('title', 'Cadastro de Contas a Receber')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
<div class="sub_header">
    <h4>Cadastre a sua Conta</h4>
    <div class="navegador">
        <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
        <a href="/home">Início</a>
        <span class="separator">&gt;</span>
        <a href="/contasreceber">A Receber</a>
        <span class="separator">&gt;</span>
        <a href="/cadastroreceber">Cadastro de Contas a Receber</a>
    </div>
</div>
<br>
<div class="cadastro">
    <div style="display: flex;">
        <img src="{{ asset('/img/edit.png') }}">
        <h5>Dados Gerais</h5>
    </div>
    <hr>
    <form>
        <div class="forms">
            <div class="table_form">
                <label class="obg" for="descricao_pagamento">Descrição do Recebimento</label>
                <input type="text" id="descricao_pagamento" name="descricao_pagamento" required>
            </div>
            <div class="table_form">
                <label class="obg" for="forma_pagamento">Forma de Recebimento</label>
                <select id="forma_pagamento" name="forma_pagamento" required>
                    <option value="" disabled selected>Selecione a forma de recebimento</option>
                    <option value="boleto">Boleto</option>
                    <option value="cartao">Cartão</option>
                    <option value="transferencia">Transferência</option>
                </select>
            </div>
            <div class="table_form">
                <label for="pagamento_quitado">Pagamento Recebido</label>
                <select id="pagamento_quitado" name="pagamento_quitado">
                    <option value="" disabled selected>Selecione</option>
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
            <div class="table_form">
                <label class="obg" for="vencimento">Vencimento</label>
                <input type="date" id="vencimento" name="vencimento" required>
            </div>
            <div class="table_form">
                <label class="obg" for="conta">Conta Bancária</label>
                <input type="text" id="conta" name="conta" required>
            </div>
        </div>
</div>

<div class="cadastro">
    <div style="display: flex;">
        <img src="{{ asset('/img/dindin.png') }}">
        <h5>Valores</h5>
    </div>
    <hr>
    <div class="forms">
        <div class="table_form">
            <label class="obg" for="valor_bruto">Valor Bruto</label>
            <input type="number" id="valor_bruto" name="valor_bruto" required>
        </div>
        <div class="table_form">
            <label for="juros">Juros</label>
            <input type="number" id="juros" name="juros">
        </div>
        <div class="table_form">
            <label for="desconto">Desconto</label>
            <input type="number" id="desconto" name="desconto">
        </div>
        <div class="table_form">
            <label for="valor_total">Valor Total</label>
            <input type="number" id="valor_total" name="valor_total">
        </div>
    </div>
</div>
<div>
    <a>
        <button class="botao_endpage" style="background-color: green; color: white; margin-left: 20px;">CADASTRAR</button>
    </a>
    <a>
        <button class="botao_endpage" style="background-color: red; color: white;">CANCELAR</button>
    </a>
</div>
</form>
@endsection
