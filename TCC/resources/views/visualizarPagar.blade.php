@extends('layouts.app')

@section('title', 'Visualização de Contas a Pagar')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="sub_header">
        <h4>Visualização de Contas a Pagar</h4>
        <div class="navegador">
            <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
            <a href="/home">Início</a>
            <span class="separator">&gt;</span>
            <a href="/contaspagar">A Pagar</a>
            <span class="separator">&gt;</span>
            <a href="/visualizarpagar">Visualizar</a>
        </div>
    </div>
    <br>
    <h1>"Conta número XXX"</h1>
    <div class="table-responsive">
        <table class="table">
            <tbody>
                <tr>
                    <td>Descrição do Pagamento</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Forma de Pagamento</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Pagamento Quitado</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Vencimento</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Conta Bancária</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Valor Bruto</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Juros</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Desconto</td>
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
