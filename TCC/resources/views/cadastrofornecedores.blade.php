@extends('layouts.app_sem_sidebar')

@section('title', 'Cadastro de Fornecedores')
    
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/style-forms.css') }}">
    <style>
        .error-message {
            color: red;
            font-size: 0.9em;
        }
    </style>
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
                    <span class="error-message" id="nomeError"></span>
                </div>
                <div class="table_form">
                    <label class="obg" for="cnpj">CNPJ</label>
                    <input type="text" id="cnpj" name="cnpj" maxlength="18" required>
                    <span class="error-message" id="cnpjError"></span>
                </div>
                <div class="table_form">
                    <label class="obg" for="contato">Contato</label>
                    <input type="text" id="contato" name="contato" required>
                    <span class="error-message" id="contatoError"></span>
                </div>
                <div class="table_form">
                    <label class="obg" for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" maxlength="15" required>
                    <span class="error-message" id="telefoneError"></span>
                </div>
                <div class="table_form">
                    <label class="obg" for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                    <span class="error-message" id="emailError"></span>
                </div>
                <div class="table_form">
                    <label for="cep">CEP</label>
                    <input type="text" id="cep" name="cep" maxlength="9">
                    <span class="error-message" id="cepError"></span>
                </div>
                <div class="table_form">
                    <label for="endereco">Endereço</label>
                    <input type="text" id="endereco" name="endereco">
                    <span class="error-message" id="enderecoError"></span>
                </div>
                <div class="table_form">
                    <label for="numero">Número</label>
                    <input type="text" id="numero" name="numero">
                    <span class="error-message" id="numeroError"></span>
                </div>
                <div class="table_form">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="cidade" name="cidade">
                    <span class="error-message" id="cidadeError"></span>
                </div>
                <div class="table_form" style="margin-right: auto; margin-left: 10px;">
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
                    <span class="error-message" id="estadoError"></span>
                </div>
                <div class="button-container">
                    <button type="submit" style="color: white;">CADASTRAR</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        document.getElementById('cadastrarFornecedores').addEventListener('submit', function(event) {
            event.preventDefault();

            var formData = new FormData(this);

            fetch('/criar_cadastro_fornecedores', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                clearErrors();
                if (data.success) {
                    window.location.href = '/fornecedores/list';
                } else {
                    displayErrors(data.errors);
                }
            })
            .catch(error => {
                console.error('Erro:', error);
            });
        });

        function clearErrors() {
            document.querySelectorAll('.error-message').forEach(el => el.textContent = '');
        }

        function displayErrors(errors) {
            for (let key in errors) {
                let errorElement = document.getElementById(`${key}Error`);
                if (errorElement) {
                    errorElement.textContent = errors[key][0];
                }
            }
        }

    </script>
@endsection
