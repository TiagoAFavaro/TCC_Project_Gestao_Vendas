@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="sub_header">
        <h1 style="margin: 5px; display: inline-block;">
            <span class="align-middle">
                <img src="{{ asset('/img/customer.png') }}" class="page_icon img-fluid icon-img" alt="Ícone">
            </span>
            Clientes
        </h1>
        <div class="navegador">
            <img src="{{ asset('/img/velo.png') }}" style="width: 23px;">
            <a href="/home">Início</a>
            <span class="separator">&gt;</span>
            <a href="#">Clientes</a>
        </div>
    </div>

    <div class="container_cliente">
        <div class="botoes">
            <a href="/cadastrar-cliente">
                <button class="botoes_cliente" style="background-color: green;">
                    <img src="{{ asset('/img/plus.png') }}" alt="Mais">
                    Adicionar
                </button>
            </a>
        </div>

        <div class="caixa_pesquisa">
            <input type="text" id="input_pesquisa" placeholder="Buscar por nome">
            <button id="botao_pesquisa">
                <img src="{{ asset('/img/lupa.png') }}" alt="Pesquisar">
            </button>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>NOME</th>
                <th>TELEFONE</th>
                <th>CPF</th>
                <th>E-MAIL</th>
                <th>CEP</th>
                <th>ENDEREÇO</th>
                <th>NÚMERO DA CASA</th>
                <th>CIDADE</th>
                <th>ESTADO</th>
                <th>AÇÕES</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cadastros as $cadastro)
            <tr>
                <td>{{ $cadastro->nome }}</td>
                <td>{{ $cadastro->telefone }}</td>
                <td>{{ $cadastro->cpf }}</td>
                <td>{{ $cadastro->email }}</td>
                <td>{{ $cadastro->cep }}</td>
                <td>{{ $cadastro->endereco }}</td>
                <td>{{ $cadastro->numeroCasa }}</td>
                <td>{{ $cadastro->cidade }}</td>
                <td>{{ $cadastro->estado }}</td>
                <td>
                    <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Edit</a>
                    <form action="/clientes/delete/{{ $cadastro->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger delete-btn">
                            <ion-icon name="trash-outline"></ion-icon>Delete
                        </button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    </form>
    <br>
    Mostrando 1 a 1 de um total de 1
</main>

@endsection
