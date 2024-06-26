@extends('layouts.app_sem_sidebar')

@section('title', 'Cadastro de Clientes')

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
                    <select id="estado" name="estado">
                        <option value="">Selecione o estado</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="button-container">
                    <button type="submit" style="color: white;">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('cadastrarClientes');

    form.addEventListener('submit', function(event) {
        event.preventDefault(); // Impede o envio padrão do formulário

        const formData = new FormData(form);

        fetch(form.action, {
            method: form.method,
            body: formData,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            }
        })
        .then(response => {
            if (!response.ok) {
                return response.json().then(data => { throw new Error(data.message); });
            }
            return response.json();
        })
        .then(data => {
            alert(data.message); // Mensagem de sucesso
            window.location.href = '/clientes/list'; // Redireciona para a lista de clientes
        })
        .catch(error => {
            alert(error.message); // Exibe a mensagem de erro
        });
    });
});


    </script>
@endsection
