@extends('layouts.app')

@section('title', 'Editar a Venda')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
@endpush

@section('content')
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
        <div class="sub_header">
            <h4>Editar a Venda</h4>
            <div class="navegador">
                <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
                <a href="/dashboard">Início</a>
                <span class="separator">&gt;</span>
                <a href="/vendas/list">Clientes</a>
                <span class="separator">&gt;</span>
                <a href="/editvenda">Visualizar</a>
            </div>
        </div>
        <br>
        <h1>"Venda número XXX"</h1>
        <form>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td>Cliente</td>
                            <td>
                                <input type="text" id="cliente" name="cliente" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Produtos</td>
                            <td>
                            <input type="text" id="produtos" name="produtos" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Data de Entrega</td>
                            <td>
                            <input type="date" id="data_entrega" name="data_entrega" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Data de Retorno</td>
                            <td>
                            <input type="text" id="data_retorno" name="data_retorno" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Situação</td>
                            <td>
                            <input type="text" id="situacao" name="situacao" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Quantidade</td>
                            <td>
                                <input type="number" id="quantidade" name="quantidade" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Detalhes</td>
                            <td>
                                <input type="text" id="detalhes" name="detalhes" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Serviços</td>
                            <td>
                                <input type="text" id="servicos" name="servicos" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Descontos</td>
                            <td>
                                <input type="text" id="descontos" name="descontos" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Valor Total</td>
                            <td>
                                <input type="text" id="valorTotal" name="valorTotal" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>Observações</td>
                            <td>
                                <input type="text" id="observacoes" name="observacoes" value="">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </main>
@endsection
